<?php
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .header p {
            opacity: 0.9;
            font-size: 1.1em;
        }

        .tasks-container {
            padding: 30px;
        }

        ul {
            list-style: none;
        }

        .task-item {
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 10px;
            border-left: 5px solid;
            background: #f8f9fa;
            transition: all 0.3s ease;
            font-size: 1.1em;
            display: flex;
            align-items: center;
        }

        .task-item::before {
            content: '○';
            font-size: 1.5em;
            margin-right: 15px;
            font-weight: bold;
        }

        .task-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para tareas completadas */
        .task-item.completed {
            background: #e8f5e9;
            text-decoration: line-through;
            opacity: 0.7;
        }

        .task-item.completed::before {
            content: '✓';
            color: #4caf50;
        }

        /* Estilos para prioridades */
        .task-item.priority-alta {
            border-left-color: #f44336;
        }

        .task-item.priority-alta::after {
            content: '🔴 Alta';
            margin-left: auto;
            font-size: 0.85em;
            padding: 5px 15px;
            background: #ffebee;
            border-radius: 20px;
            color: #c62828;
            font-weight: bold;
        }

        .task-item.priority-media {
            border-left-color: #ff9800;
        }

        .task-item.priority-media::after {
            content: '🟡 Media';
            margin-left: auto;
            font-size: 0.85em;
            padding: 5px 15px;
            background: #fff3e0;
            border-radius: 20px;
            color: #e65100;
            font-weight: bold;
        }

        .task-item.priority-baja {
            border-left-color: #4caf50;
        }

        .task-item.priority-baja::after {
            content: '🟢 Baja';
            margin-left: auto;
            font-size: 0.85em;
            padding: 5px 15px;
            background: #e8f5e9;
            border-radius: 20px;
            color: #2e7d32;
            font-weight: bold;
        }

        /* Estadísticas */
        .stats {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2em;
            font-weight: bold;
            color: #667eea;
        }

        .stat-label {
            color: #666;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>
    </header>

    <main>
        <h2>Perfil del Usuario</h2>
        <p><strong>Nombre:</strong><?php echo $userName; ?></p>
        <p><strong>Edad:</strong><?php echo $userAge; ?>años</p>
        <p><strong>Estado de la cuenta:</strong>Usuario<?php echo $isPremiumUser ? "Premium" : "Estandar"; ?></p>
    </main>