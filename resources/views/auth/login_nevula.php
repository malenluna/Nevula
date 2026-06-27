<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Nevula</title>
    <link rel="stylesheet" href="../../css/style_login.css">
</head>
<body>
    
    <div class="login-card">
            <div class="logo-container">
             <img src="nevula_logo.gif" alt="Icono" class="logo-icon">
              <h1 class="logo-text">nevula</h1>
           </div>
       <form action="index.php?slug=LoginController" method="post">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
