<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow</title>
    <style>
        body { font-family: sans-serif; margin: 2em; background-color: #f1f5f9; }
        ul { list-style-type: none; padding: 0; }
        .completed { text-decoration: line-through; color: #9ca3af; }
        .task-item { padding: 10px; border-left: 5px solid; margin-bottom: 8px; background-color: #ffffff; box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1); border-radius: 0 4px 4px 0; transition: transform 0.2s ease; }
        .task-item:hover { transform: translateX(5px); }
        .priority-alta { border-left-color: #ef4444; }
        .priority-media { border-left-color: #f59e0b; }
        .priority-baja { border-left-color: #22c55e; }
        header, footer { text-align: center; color: #475569; }
    </style>
</head>
<body>
<header>
    <h1>Mi Lista de Tareas</h1>
</header>
<form>

<form action="index.php?accion=login" method="post">
<h2>Iniciar Sesión</h2>
<input type="email" name="email" placeholder="Correo electrónico"
required>
<input type="password" name="password" placeholder="Contraseña"
required>
<button type="submit">Entrar</button>
<?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; }


foreach ($tareas as $tarea) {
    echo renderizarTarea($tarea);
}

?>
    </form>
</body>
</html>