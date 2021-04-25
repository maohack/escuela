<?php
  session_start();
  if (@!$_SESSION['user']){
    header('location: index.php');
  }

?>

<?php include('layouts/header.php'); ?>
<?php include("includes/conexion.php"); 

    $fecha_agenda = '';
    $hora = '';
    $nombres = '';
    $apellidos = '';
    $t_doc = '';
    $n_doc = '';
    $email = '';
    $celular = '';
    $categoria = '';
    $escuela = '';
    $examen = '';
    $practica = '';
    $horas = '';
    $referido = '';
    $tarea = '';
    $valor = '';
    $abono = '';
    $comision = '';
    $estado = '';
    $dir = '';
    $url = '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM registros WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $fecha_agenda = $row['fecha_agenda'];
    $hora = $row['hora'];
    $nombres = $row['nombres'];
    $apellidos = $row['apellidos'];
    $t_doc = $row['t_doc'];
    $n_doc = $row['n_doc'];
    $email = $row['email'];
    $celular = $row['celular'];
    $categoria = $row['categoria'];
    $escuela = $row['escuela'];
    $examen = $row['examen'];
    $practica = $row['practica'];
    $horas = $row['horas'];
    $referido = $row['referido'];
    $tarea = $row['tarea'];
    $valor = $row['valor'];
    $abono = $row['abono'];    
    $comision = $row['comision'];
    $estado = $row['estado'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
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
    $comision = $_POST['comision'];
    $estado = $_POST['estado'];

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

  $query = "UPDATE registros set fecha_agenda = '$fecha_agenda', hora = '$hora', nombres = '$nombres', apellidos = '$apellidos', t_doc = '$t_doc', n_doc = '$n_doc', email = '$email', celular = '$celular', categoria = '$categoria', escuela = '$escuela', examen = '$examen', practica = '$practica', horas = '$horas', referido = '$referido', tarea = '$tarea', valor = '$valor', abono = '$abono', comision = '$comision', estado = '$estado', dir = '$dir', url = '$url' WHERE id=$id";
  mysqli_query($conn, $query);
  header('Location: base_users.php');
}

?>

 
<main class="container p-4">
  
<div class="row justify-content-center">

<!-- DIV IZQUIERDA -->

<div class="col-md-12">
<div class="card card-body bg-light">

<form action="edit_users.php?id=<?php echo $_GET['id']; ?>" method="POST">

<!-- LINEA CERO FORM -->
<div class="form-row">
    <div class="form-group col-md-5">
      <label for="">Fecha Agenda:</label>
    <input type="date" name="fecha_agenda" value="<?php echo $fecha_agenda; ?>">
    </div>
    <div class="form-group col-md-5">
      <label for="">Hora Agenda:</label>
    <input type="time" name="hora" min="08:00" max="18:30" step="1" value="<?php echo $hora; ?>">
    </div>
</div>
<!-- PRIMERA LINEA FORM -->
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="">Nombres:</label>
      <input type="text" name="nombres" class="form-control" value="<?php echo $nombres; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="">Apellidos:</label>
      <input type="text" name="apellidos" class="form-control" value="<?php echo $apellidos; ?>">
    </div>
    <div class="form-group col-md-2">
      <label for="">Tipo_Doc</label>
      <select class="form-control" name="t_doc">  
        <option value="<?php echo $t_doc; ?>" selected><?php echo $t_doc; ?></option>
        <option value="C.C.">C.C.</option>
        <option value="C.E.">C.E.</option>
        <option value="T.I.">T.I.</option>
        <option value="P.P.">P.P.</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="">Num_Documento</label>
      <input type="text" name="n_doc" class="form-control" maxlength="10" value="<?php echo $n_doc; ?>">
    </div>
</div>
<!-- SEGUNDA LINEA FORM -->
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="">E-mail:</label>
      <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="">Celular:</label>
      <input type="text" name="celular" class="form-control" maxlength="10" value="<?php echo $celular; ?>">
    </div>
    <div class="form-group col-md-2">
      <label for="">Categoria</label>
      <select class="form-control" name="categoria">
        <option value="<?php echo $categoria; ?>" selected><?php echo $categoria; ?></option>
        <option value="A2">A2</option>
        <option value="B1">B1</option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="C3">C3</option>
        <option value="A2-B1">A2-B1</option>
        <option value="A2-C1">A2-C1</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="">Escuela:</label>
      <select class="form-control" name="escuela">
        <option value="<?php echo $escuela; ?>" selected><?php echo $escuela; ?></option>
        <option value="Auto_Driving">Auto_Driving</option>
        <option value="Agente_Guerrero">Agente_Guerrero</option>
        <option value="Conducoches">Conducoches</option>
        <option value="Formacion_Vial">Formacion_Vial</option>
        <option value="Suzuka">Suzuka</option>
      </select>
    </div>
</div>
<!-- TERCERA LINEA FORM -->
<div class="form-row">
    <div class="form-group col-md-2.5">
      <label for="">Examen:</label>
      <select class="form-control" name="examen">
        <option value="<?php echo $examen; ?>" selected><?php echo $examen; ?></option>
        <option value="Con_Medico">Con Examen</option>
        <option value="Sin_Medico">Sin Examen</option>
      </select>
    </div>
    <div class="form-group col-md-2.5">
      <label for="">Practica:</label>
      <select class="form-control" name="practica">
        <option value="<?php echo $practica; ?>" selected><?php echo $practica; ?></option>
        <option value="Sin_Practica">Sin_Practica</option>
        <option value="Con_Practica">Con_Practica</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="">Horas:</label>
      <select class="form-control" name="horas">
        <option value="<?php echo $horas; ?>" selected><?php echo $horas; ?></option>
        <option value="NO">NO</option>
        <option value="5-Horas">5-Horas</option>
        <option value="10-Horas">10-Horas</option>
        <option value="Full-Moto">Full-Moto</option>
        <option value="Full-Carro">Full-Carro</option>
        <option value="Full_Moto_Carro">Full_Moto_Carro</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="">Referido:</label>
      <input type="text" name="referido" class="form-control" value="<?php echo $referido; ?>">
    </div>
    <div class="form-group col-md-1.5">
      <label for=""> Tarea:</label>
      <select class="form-control" name="tarea">
        <option value="<?php echo $tarea; ?>" selected><?php echo $tarea; ?></option>
        <option value="NO">NO</option>
        <option value="SI">SI</option>
      </select>
    </div>
</div>
<!-- CUARTA LINEA FORM -->
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="">Valor:</label>
      <input type="text" name="valor" class="form-control" value="<?php echo $valor; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="">Abono:</label>
      <input type="text" name="abono" class="form-control" value="<?php echo $abono; ?>">
    </div>
    <div class="form-group col-md-2">
      <label for="">comision:</label>
      <input type="text" name="comision" class="form-control" value="<?php echo $comision; ?>" >
    </div>
    <div class="form-group col-md-3">
      <label for="">Estado:</label>
      <select class="form-control" name="estado">
        <option value="<?php echo $estado; ?>" selected><?php echo $estado; ?></option>
        <option value="Agendado">Agendado</option>
        <option value="Certificado">Certificado</option>
        <option value="Matriculado">Matriculado</option>
        <option value="Pendiente">Pendiente</option>
        <option value="Pagado">Pagado</option>       
      </select>
    </div>
</div> 
        
<!-- BOTON FORM -->
<div class="form-row">
 <div class="form-group col-md-12">
  <button type="submit" name="update" class="btn btn-warning btn-lg">Update Registro</button>
</div>
</div>
</form>
</div>
</div>


</div><!--div class row-->

</main>
  
 <?php include('layouts/footer.php'); ?> 
