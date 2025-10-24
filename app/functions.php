<?php
function obtenerClasePrioridad($tareas, $prioridad)
{
    foreach ($tareas as $tarea) {
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
    }
    return $clasesTarea;
}
function renderizarTarea($tareas,$clasesTarea){
    $clasesTarea= obtenerClasePrioridad($tareas);

    return "<li class='$clasesTarea'>{$tareas['titulo']}</li>";
}
?>