<?php
// Cambiado para recibir una única tarea
function obtenerClaseTarea(array $tarea) : string
{
    $clasesTarea = 'task-item';

    if ($tarea['completado']) {
        $clasesTarea .= ' completed';
    }

    switch ($tarea['prioridad']) {
        case 'alta':
            $clasesTarea .= ' priority-alta';
            break;
        case 'media':
            $clasesTarea .= ' priority-media';
            break;
        case 'baja':
            $clasesTarea .= ' priority-baja';
            break;
    }

    // Retorna la clase de esta única tarea
    return $clasesTarea;
}

// Cambiado para recibir una única tarea y usar la función corregida
function renderizarTarea(array $tarea) : string {
    // Llama a la función de clase con la única tarea
    $clasesTarea = obtenerClaseTarea($tarea);

    return "<li class='$clasesTarea'>{$tarea['titulo']}</li>";
}
?>