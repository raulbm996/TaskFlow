<#
Genera una clave SSH ed25519, arranca ssh-agent, añade la clave con passphrase y muestra la clave pública.

Uso:
  Ejecuta en PowerShell (ejecuta como usuario):
    .\scripts\generate-ssh-key.ps1 -KeyName id_ed25519_taskflow

Opciones:
  -KeyName: nombre del archivo de clave (por defecto: id_ed25519_taskflow)
  -Force: sobrescribe si la clave ya existe
#>

param(
    [string]$KeyName = "id_ed25519_taskflow",
    [switch]$Force
)

Set-StrictMode -Version Latest

$sshDir = Join-Path $env:USERPROFILE ".ssh"
if (-not (Test-Path $sshDir)) {
    New-Item -ItemType Directory -Path $sshDir | Out-Null
    Write-Output "Creado directorio $sshDir"
}

$privateKeyPath = Join-Path $sshDir $KeyName
$publicKeyPath = "$privateKeyPath.pub"

if ((Test-Path $privateKeyPath) -and (-not $Force)) {
    Write-Output "La clave $privateKeyPath ya existe. Usa -Force para sobrescribir o elige otro nombre con -KeyName.";
    exit 1
}

if (Test-Path $privateKeyPath) {
    Remove-Item $privateKeyPath -Force
}
if (Test-Path $publicKeyPath) {
    Remove-Item $publicKeyPath -Force
}

# Generar clave ed25519
$sshKeygen = "ssh-keygen"

$args = @('-t','ed25519','-a','100','-f',$privateKeyPath,'-C','TaskFlow repo key')

Write-Output "Generando clave SSH ed25519 en: $privateKeyPath"

# Ejecutar ssh-keygen interactivo para pedir passphrase
& $sshKeygen @args

if ($LASTEXITCODE -ne 0) {
    Write-Error "ssh-keygen falló con código $LASTEXITCODE"
    exit $LASTEXITCODE
}

# Iniciar ssh-agent (Windows)
function Start-SshAgent {
    Write-Output "Iniciando ssh-agent..."
    # Para Windows: usar el servicio OpenSSH Authentication Agent si está disponible
    $svc = Get-Service -Name ssh-agent -ErrorAction SilentlyContinue
    if ($null -ne $svc) {
        if ($svc.Status -ne 'Running') {
            Start-Service ssh-agent
            Write-Output "Servicio ssh-agent iniciado."
        } else {
            Write-Output "ssh-agent ya está en ejecución."
        }
    } else {
        Write-Output "Servicio ssh-agent no encontrado. Intentando ejecutar 'ssh-agent' en el entorno actual..."
        # Intentar lanzar un agente en background (puede no funcionar igual en PowerShell v5)
        $agent = & ssh-agent
        Write-Output $agent
    }
}

Start-SshAgent

# Añadir clave al agente
Write-Output "Añadiendo la clave privada al ssh-agent (se solicitará la passphrase si la estableciste)..."
& ssh-add $privateKeyPath

if ($LASTEXITCODE -ne 0) {
    Write-Warning "ssh-add devolvió código $LASTEXITCODE. Si recibes errores, asegúrate de tener OpenSSH instalado y el servicio ssh-agent activo."
}

Write-Output "Clave pública generada en: $publicKeyPath"
Write-Output "Contenido de la clave pública (puedes copiarla):`n"
Get-Content $publicKeyPath

Write-Output "
Siguientes pasos:
  1) Copia la clave pública mostrada arriba y pégala en GitHub > Settings > SSH and GPG keys > New SSH key.
  2) En tu repositorio local, cambia el remote a la URL SSH: git remote set-url origin git@github.com:usuario/taskflow.git
  3) Prueba la conexión: ssh -T git@github.com
  4) Haz push: git push origin main
" | Write-Output
