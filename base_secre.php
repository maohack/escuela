<?php
session_start();
 
if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit;
} else {
    // Show users the page!
}
?>


<?php include('layouts/header.php'); ?>
<?php include('includes/conexion.php'); ?>


<main class="container p-4">

<div class="card card-body bg-white">

<table class="table table-hover table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>Fecha_Agenda</th>
            <th>Hora</th>
            <th>Categoria</th>
            <th>Nombre_Usuario</th>
            <th>N_Documento</th>
            <th>Celular</th>
            <th>Panel_de_Acciones</th> <img src="" alt="">
          </tr>
        </thead>
        <tbody>

          <?php
             
          $query = "SELECT DATE_FORMAT(fecha_agenda, '%d-%m-%y') AS fecha, hora, categoria, nombres, apellidos, n_doc, celular, id FROM registros";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['fecha']; ?></td>
            <td><?php echo $row['hora']; ?></td>
            <td><?php echo $row['categoria']; ?></td>         
            <td><?php echo $row['nombres']; ?> <?php echo $row['apellidos']; ?></td>
            <td><?php echo $row['n_doc']; ?></td>
            <td><?php echo $row['celular']; ?></td>
            <td>
              <a href="edit_secre.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="mpdf/index.php?id=<?php echo $row['id']?>" target="_blank" class="btn btn-success">
                <i class="fas fa-print"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
</div>
</main>

<?php include('layouts/footer.php'); ?>
 


      
    