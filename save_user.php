<?php

include('includes/conexion.php');


if (isset($_POST['save_task'])) {
    $user = $_POST['user'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $mail = $_POST['mail'];
    $level = $_POST['level'];

    
  $query = "INSERT INTO usuarios (user, name, password, mail, id_level) VALUES ('$user', '$name', '$password', '$mail', '$level')";
    
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }


}

?>
