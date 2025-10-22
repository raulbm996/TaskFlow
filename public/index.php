<?php
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

include 'header.php';
<h2>Tareas Pendientes</h2>
<ul>
    foreach ($tasks as $task) {
    $taskClasses = 'task-item';
    if ($task['completed']) {
    $classes .= ' completed';
    }
    $classes .= ' priority-' . $task['priority'];

    echo "<li class='$classes'>{$task['title']}</li>";
    }
</ul>
include 'footer.php';