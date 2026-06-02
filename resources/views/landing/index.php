<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nevula</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Syne:wght@800&display=swap');

        :root {
            --primary: #6c5ce7;
            --bg: #f4f7f6;
        }

        body {
            background-color: var(--bg);
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .landing-card {
            background: white;
            padding: 3rem;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            text-align: center;
            width: 380px;
        }

        .logo-text {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 28px;
            color: var(--primary);
            margin-bottom: 10px;
        }

        p {
            color: #555;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            width: 100%;
            padding: 12px;
            background-color: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: bold;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>

    <div class="landing-card">

        <div class="logo-text">NEVULA</div>

        <p>Sistema de gestión de equipos y tareas</p>

        <!-- Redirección al login MVC -->
        <a class="btn" href="../../../app/http/controllers/AuthController.php">Iniciar sesión</a>

    </div>

</body>
</html>

