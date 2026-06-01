<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Nevula</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="login-card">
            <div class="logo-container">
             <img src="nevula_logo.gif" alt="Icono" class="logo-icon">
              <h1 class="logo-text">nevula</h1>
           </div>
        <form action="#" method="post">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Iniciar Sesión</button>
        </form>
        
        <p>¿No tienes cuenta? <a href="register_nevula.php">Regístrate aquí</a></p>
    </div>
</body>
</html>