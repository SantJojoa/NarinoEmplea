<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../../assets/css/stylelogin.css">
</head>
<body>
<form action="http://localhost/Narino_Emplea/back/register.php" method="post">
        <h1>Bienvenido de nuevo</h1>
        <div class="inputBox">
            <input name="login" type="text" placeholder="Ingrese su cédula" required>
        </div>
        <div class="inputBox">
            <input name="pass" type="text" placeholder="Ingrese su contraseña" required>
        </div>
        <div class="inputBox">
            <input type="submit" value="Ingresar">
        </div>
        <p>¿No tiene una cuenta? <a href="http://localhost/NarinoEmplea/front/create/create_user.html">Registrarse</a></p>
    </form>
</body>
</html>