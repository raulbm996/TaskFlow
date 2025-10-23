<?php
//Bloque de configuración principal
define("SITE_NAME", "TaskFlow");
$pageTitle = "Página de Inicio";
$userName = "Raul"; //Tipo String
$userAge = "20"; //Tipo Integer
$isPremiumUser = true; //Tipo Boolean 

// Array principal de tareas
$tasks = [
    // Tarea 1
    [
        'title' => 'Implementar sistema de autenticación',
        'completed' => false,
        'priority' => 'alta'
    ],

    // Tarea 2
    [
        'title' => 'Revisar políticas de almacenamiento',
        'completed' => true,
        'priority' => 'alta'
    ],

    // Tarea 3
    [
        'title' => 'Configurar copias de seguridad del NAS',
        'completed' => true,
        'priority' => 'media'
    ],

    // Tarea 4
    [
        'title' => 'Actualizar documentación técnica',
        'completed' => false,
        'priority' => 'baja'
    ],

    // Tarea 5
    [
        'title' => 'Realizar pruebas de restauración',
        'completed' => false,
        'priority' => 'media'
    ]
];
?>

<?php include '../app/views/header.php' ?>
<h2>Tareas Pendientes</h2>
<ul>
    <?php
    foreach ($tasks as $task) {
        // 1. Variable con clase base
        $taskClasses = 'task-item';

        // 2. IF: Comprobar si completada
        if ($task['completed']) {
            $taskClasses .= ' completed';
        }

        // 3. SWITCH: Evaluar prioridad
        switch ($task['priority']) {
            case 'alta':
                $taskClasses .= ' priority-alta';
                break;
            case 'media':
                $taskClasses .= ' priority-media';
                break;
            case 'baja':
                $taskClasses .= ' priority-baja';
                break;
        }

        // 4. ECHO: Imprimir <li>
        echo "<li class=\"{$taskClasses}\">{$task['title']}</li>";
    }
    ?>
</ul>
<?php include '../app/views/footer.php'; ?>