<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEST</title>
     <link href="css/mao.css" rel="stylesheet">
</head>

 <?php
/*
function logo_escuela ($n) {
    
    $logo=0;
    
    
    if ($n==Auto_Driving) {
       $logo= "css/img/logo_1.png";
    }else if ($n==Agente_Guerrero) {
        $logo= "css/img/logo_2.png";
    }else if ($n==Conducoches) {
        $logo= "css/img/logo_3.png";
    }else if ($n==Formacion_Vial) {
        $logo= "css/img/logo_4.png";
    }else {
        $logo= "css/img/logo_5.png";
    }
    
    return $logo;
    
}
*/
    
    
    function logo_escuela ($n) {
    
    $logo=0;
       
       
    $f1 = "Auto_Driving";
    $f2 = "Agente_Guerrero";
    $f3 = "Conducoches";
    $f4 = "Formacion_Vial";
 
    
    if ($n==$f1) {
       $logo= 'css/img/logo_1.png';
    }else if ($n==$f2) {
        $logo= "css/img/logo_2.png";
    }else if ($n==$f3) {
        $logo= "css/img/logo_3.png";
    }else if ($n==$f4) {
        $logo= "css/img/logo_4.png";
    }else {
        $logo= "error logo";
    }
    
    return $logo;
    
}

  $conn = new mysqli("localhost", "root", "", "nemesis");
 
  $query = "SELECT DATE_FORMAT(fecha_agenda, '%d-%m-%y') AS fecha, hora, categoria, examen, practica, horas, valor, nombres, apellidos, n_doc, t_doc, email, escuela, celular, id FROM registros";
  $result = mysqli_query($conn, $query);
  while($row = mysqli_fetch_assoc($result)) { 
 
      $puto = logo_escuela ($row['escuela']);
      
      echo $puto;
/*
 
      
  $buscar=$row['escuela'];
  $f1="css/img/logo_1.png";
  $f2="css/img/logo_2.png";
  $f3="css/img/logo_3.png";
  $f4="css/img/logo_4.png";
  $f5="css/img/logo_5.png";
  $salida=0;
  
      if ($buscar=="Auto_Driving") {
          echo "<img src='".$f1."' />";
      } else if ($buscar=="Agente_Guerrero") {
          echo "<img src='".$f2."' />";  
      } else if ($buscar=="Conducoches") {
          echo "<img src='".$f3."' />"; 
      } else if ($buscar=="Formacion_Vial") {
          echo "<img src='".$f4."' />"; 
      } else if ($buscar=="Suzuka") {
          echo "<img src='".$f5."' />"; 
      } else {
          echo "Error Logo";
      }
*/ 
  
  }
?>  
</body>


</html>