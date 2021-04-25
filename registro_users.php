<?php
  session_start();
  if (@!$_SESSION['user']){
    header('location: index.php');
  }

?>
<?php include('layouts/header.php'); ?>
<?php include('includes/conexion.php'); ?>
<main class="container p-3">
<div class="card">
<div class="card-header">
<div class="row">
<div class="col-sm-8">
    Registros Escuela
</div>

<div class="col-sm-4">
    <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php session_unset(); } ?>
</div>
</div>
</div>

<div class="row justify-content-center">

<form action="save.php" method="POST"> 
<br>
<!-- PRIMERA LINEA FORM -->
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="">Nombres:</label>
      <input type="text" name="nombres" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="">Apellidos:</label>
      <input type="text" name="apellidos" class="form-control" >
    </div>
    <div class="form-group col-md-2">
      <label for="">Tipo_Doc</label>
      <select class="form-control" name="t_doc">
        <option value="C.C." selected>C.C.</option>
        <option value="C.E.">C.E.</option>
        <option value="T.I.">T.I.</option>
        <option value="P.P.">P.P.</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="">Num_Documento</label>
      <input type="text" name="n_doc" class="form-control" maxlength="10">
    </div>
</div>
<!-- SEGUNDA LINEA FORM -->
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="">E-mail:</label>
      <input type="email" name="email" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="">Celular:</label>
      <input type="text" name="celular" class="form-control" maxlength="10">
    </div>
    <div class="form-group col-md-2">
      <label for="">Categoria</label>
      <select class="form-control" name="categoria">
        <option value="A2" selected>A2</option>
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
        <option value="Auto_Driving" selected>Auto_Driving</option>
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
        <option value="Con_Medico"selected>Con Examen</option>
        <option value="Sin_Medico">Sin Examen</option>
      </select>
    </div>
    <div class="form-group col-md-2.5">
      <label for="">Practica:</label>
      <select class="form-control" name="practica">
        <option value="Sin_Practica" selected>Sin_Practica</option>
        <option value="Con_Practica">Con_Practica</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="">Horas:</label>
      <select class="form-control" name="horas">
        <option value="NO"selected>NO</option>
        <option value="5-Horas">5-Horas</option>
        <option value="10-Horas">10-Horas</option>
        <option value="Full-Moto">Full-Moto</option>
        <option value="Full-Carro">Full-Carro</option>
        <option value="Full_Moto_Carro">Full_Moto_Carro</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="">Referido:</label>
      <input type="text" name="referido" class="form-control">
    </div>
    <div class="form-group col-md-1.5">
      <label for=""> Tarea:</label>
      <select class="form-control" name="tarea">
        <option value="NO"selected>NO</option>
        <option value="SI">SI</option>
      </select>
    </div>
</div>
<!-- CUARTA LINEA FORM -->
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="">Valor:</label>
      <input type="text" name="valor" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="">Abono:</label>
      <input type="text" name="abono" class="form-control" >
    </div>
    <div class="form-group col-md-2">
      <label for="">comision:</label>
      <input type="text" name="comision" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="">Estado:</label>
      <select class="form-control" name="estado">
        <option value="Agendado"selected>Agendado</option>
        <option value="Certificado">Certificado</option>
        <option value="Matriculado">Matriculado</option>
        <option value="Pendiente">Pendiente</option>
        <option value="Pagado">Pagado</option>       
      </select>
    </div>
</div>
     
<!-- BOTON FORM -->
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="">Fecha Agenda:</label>
    <input type="date" name="fecha_agenda">
    </div>
    <div class="form-group col-md-4">
      <label for="">Hora Agenda:</label>
    <input type="time" name="hora" value="08:00" min="08:00" max="18:30" step="1">
    </div>
    <div class="form-group col-md-4"> <br>
  <button type="submit" name="save_task" class="btn btn-success btn-lg">Guardar Registro</button>
    </div>
</div>
</form>
</div>

</div> <!--div class row-->
</div> <!--fin card-header--->

</main>
<?php include('layouts/footer.php'); ?>

