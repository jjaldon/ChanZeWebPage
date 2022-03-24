<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="register-page">
        <div class="wrap-register">
            <h2 class="signup-here">Sign Up Here!</h2>
            <form class="register-form" action="submit_register.php" method = "POST">
                <input type="text" for="nombre" class="input-edit" name = "nombre" id = "nombre" placeholder="First Name..." required>
                <input type="text" for="apellido" class="input-edit" name = "apellido" id = "apellido" placeholder="Last Name..." required>
                <input type="text" for="email" class="input-edit" name = "email" id = "email" placeholder="Email..." required>
                <input type="username" for="username" class="input-edit" name = "username" id = "username" placeholder="Username..." required>
                <input type="password" for="contrasenia" class="input-edit" class="psw" name = "contrasenia" id = "contrasenia" placeholder="Password..." required>
                <input type="submit" class="submit-edit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>