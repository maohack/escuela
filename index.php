<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!----------------- BOOTSTRAP 4 ----------------------------------------------->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

        <title>:: Sistema Escuela ::</title>
    </head>
    
 <?php include("includes/conexion.php"); ?>
     <body>   
        <div class="l-form">
            <form action="login.php" class="form" method="POST">                             
                <div class="form__div">
                    <input type="text" class="form__input"  name="user" autocomplete="off" required placeholder=" ">
                    <label for="" class="form__label">Usuario</label>
                </div>
                <div class="form__div">
                    <input type="password" class="form__input" name="password" autocomplete="off" required placeholder=" ">
                    <label for="" class="form__label">Contraseña</label>
                </div>
                <input type="submit" class="form__button" value="Iniciar Sesión" name="save_task">
            </form>
        </div>

            
        
<!-- BOOTSTRAP 4 SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>