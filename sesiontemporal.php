<?
//iniciamos la sesión

session_start();

//antes de hacer los cálculos, compruebo que el usuario está logueado
//utilizamos el mismo script que antes
if ($_SESSION["user"] != "SI") {
    //si no está logueado lo envío a la página de autentificación
    header("Location: index.php");
} else {
    //sino, calculamos el tiempo transcurrido
    $fechaGuardada = $_SESSION["user"];
    $ahora = date("Y-n-j H:i:s");
    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));

 
     if($tiempo_transcurrido >= 60) {
       session_destroy(); 
       header("Location: index.php"); 
    } else {
    $_SESSION["ultimoAcceso"] = $ahora;
   }
}
?>



    
   
