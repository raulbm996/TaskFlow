# Instrucciones para configurar SSH para el repositorio TaskFlow

Este documento explica cómo generar una clave SSH con passphrase, añadirla a GitHub y configurar tu repositorio local para usar SSH.

Archivos creados:
- `scripts/generate-ssh-key.ps1`: script PowerShell para generar la clave y añadirla al ssh-agent.

1) Generar la clave (PowerShell)

  - Abre PowerShell y navega a la raíz del repositorio `TaskFlow-master`.
  - Ejecuta:

    .\scripts\generate-ssh-key.ps1 -KeyName id_ed25519_taskflow

  - El script te pedirá una passphrase (frase de paso). Recomendado usar una passphrase segura.
  - El script imprimirá la clave pública en pantalla al terminar.

2) Añadir la clave a GitHub

  - Copia la salida (la línea larga que comienza con `ssh-ed25519`) y en GitHub ve a:
    Settings -> SSH and GPG keys -> New SSH key
  - Pega la clave, pon un título (por ejemplo: "TaskFlow - Mi máquina") y guarda.

3) Cambiar el remote del repositorio a SSH

  - Obtén la URL SSH del repo (por ejemplo `git@github.com:usuario/taskflow.git`).
  - En tu copia local ejecuta:

    git remote set-url origin git@github.com:usuario/taskflow.git

4) Probar la conexión

  - Prueba la conexión a GitHub:

    ssh -T git@github.com

  - Deberías recibir un mensaje de bienvenida con tu usuario GitHub.

5) Hacer push

  - Luego haz un push de prueba:

    git push origin main

Notas y alternativas

- Si prefieres que la clave solo tenga acceso a este repositorio en GitHub, en lugar de añadirla a tu cuenta, usa Deploy Keys: en la página del repositorio -> Settings -> Deploy keys -> Add deploy key. Una deploy key puede ser de solo lectura o permitir escritura (dangerous).
- Si usas Windows y no tienes OpenSSH instalado, instala la característica 'OpenSSH Client' y 'OpenSSH Server' desde Configuración -> Aplicaciones -> Características opcionales, o instala Git for Windows que incluye herramientas SSH.

Si quieres, puedo también:

- Modificar el script para crear la clave sin interacción (pasar passphrase por parámetro).
- Crear una tarea de PowerShell (tasks.json) para ejecutar el script desde VS Code.
