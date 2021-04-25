<?php

include("includes/conexion.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM registros WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Eliminado :( ';
  $_SESSION['message_type'] = 'danger';
  header('Location: base_users.php');
}

?>
