<?php
function obtenerClasePrioridad($prioridad)
{
    $taskpriority = "task-item";
    switch ($prioridad) {
        case 'alta':
            return $taskpriority . ' priority-alta';
        case 'media':
            return $taskpriority . ' priority-media';
        case 'baja':
            return $taskpriority . ' priority-baja';
    }
}

function renderizarTarea($tarea)
{
    $clasePrioridad = obtenerClasePrioridad($tarea['priority']);
    $clasePrioridad .= $tarea['completed'] ? 'completed' : '';

    echo "<li class='$clasePrioridad'>{$tarea['title']}</li>";
}
?>