<?php

include('includes/conexion.php');

$valor = $_POST['valor'];
$abono = $_POST['abono'];
$suma = $valor-$abono;
$escuela = $_POST['escuela'];

      if ($escuela=="Auto_Driving") {
          $dir="CRA 8C # 185 A - 18";
          $url="../css/img/logo_1.png";
      } else if ($escuela=="Agente_Guerrero") {
          $dir="CALLE 45 A sur # 54 A 55 piso 2";
          $url="../css/img/logo_2.png";
      } else if ($escuela=="Conducoches") {
          $dir="DIAGONAL 47 sur # 53-17 Piso 2";
          $url="../css/img/logo_3.png";
      } else if ($escuela=="Formacion_Vial") {
          $dir="TRANSVERSAL 126 B # 135-10";
          $url="../css/img/logo_4.png";
      } else if ($escuela=="Suzuka") {
          $dir="CRA 69 B # 25-41 SUR PISO 2";
          $url="../css/img/logo_5.png";
      } else {
          echo "Error escuela";
      }


if (isset($_POST['save_task'])) {
    $fecha_agenda = $_POST['fecha_agenda'];
    $hora = $_POST['hora'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $t_doc = $_POST['t_doc'];
    $n_doc = $_POST['n_doc'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $categoria = $_POST['categoria'];
    $escuela = $_POST['escuela'];
    $examen = $_POST['examen'];
    $practica = $_POST['practica'];
    $horas = $_POST['horas'];
    $referido = $_POST['referido'];
    $tarea = $_POST['tarea'];
    $valor = $_POST['valor'];
    $abono = $_POST['abono'];
    $saldo = $suma;    
    $comision = $_POST['comision'];
    $estado = $_POST['estado'];

    
  $query = "INSERT INTO registros(fecha_agenda, hora, nombres, apellidos, t_doc, n_doc, email, celular, categoria, escuela, examen, practica, horas, referido, tarea, valor, abono, saldo, comision, estado, dir, url) VALUES ('$fecha_agenda', '$hora', '$nombres', '$apellidos', '$t_doc', '$n_doc', '$email', '$celular', '$categoria', '$escuela', '$examen', '$practica', '$horas', '$referido', '$tarea', '$valor', '$abono', '$saldo', '$comision', '$estado', '$dir', '$url')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Exitoso';
  $_SESSION['message_type'] = 'success';
  header('Location: registro_users.php');

}

?>
