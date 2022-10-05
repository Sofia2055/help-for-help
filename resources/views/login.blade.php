<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="img/logo-k.png">
    <link rel="stylesheet" href="css/02.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <div id="contenedor">
            
        <div id="contenedorcentrado">
            <div id="login">
                <form id="loginform">
                    <label for="usuario">Usuario</label>
                    <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>
                    
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" placeholder="Contraseña" name="password" required>
                    
                    <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                </form>
                
            </div>
            <div id="derecho">
                <div class="titulo">
                    Welcome Administrator
                </div>
                <hr>
                <div class="pie-form">
                    <a href="#">¿Perdiste tu contraseña?</a>
                    <a href="#">¿No tienes Cuenta? Registrate</a>
                    <hr>
                    <a href="01.html">« Volver</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>