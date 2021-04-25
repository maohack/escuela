<?php

session_start();


include("includes/conexion.php");

/* Traigo las variables del formulario */

$user = $_POST['user'];
$pass = $_POST['password'];

/* SELECT * FROM usuarios INNER JOIN roles ON roles.nivel = usuarios.id_level WHERE user = 'Admin' */

$query = mysqli_query($conn,  "SELECT * FROM usuarios INNER JOIN roles ON roles.nivel = usuarios.id_level WHERE user = '$user'");
$user = mysqli_fetch_array($query);


                        
    if($pass == $user['password']){
        $_SESSION['id']     = $user['id'];
        $_SESSION['user']   = $user['user'];
        $_SESSION['name']   = $user['name'];
        $_SESSION['nivel']  = $user['nivel'];
        $_SESSION['rol']    = $user['rol'];
        header("Location: registro_users.php");
    } else {
     echo " <script> alert('Princesa Meta los datos bien... Jajajaja....'); window.location= 'index.php'</script>";
    }

?>