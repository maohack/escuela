<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>

    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="save_user.php" method="POST">
       <?php

            if(isset($errorLogin)){
                echo $errorLogin;
            }

       ?>
        <h2>Iniciar sesión</h2>
        <p>User_Name: <br>
        <input type="text" name="user"></p>
        <p>Nombre: <br>
        <input type="text" name="name"></p>
        <p>Password: <br>
        <input type="password" name="password"></p>
        <p>E-mail: <br>
        <input type="text" name="mail"></p>
        <p>Level: <br>
        <input type="text" name="level"></p>
        
        <p class="center"><input type="submit" value="Iniciar Sesión" name="save_task"></p>
    </form>
</body>
</html>
