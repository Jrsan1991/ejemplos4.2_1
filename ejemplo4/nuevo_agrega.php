<?php
      // proceso para guardar un nuevo registro a la base de datos
      include("basedatos.php");
      $marca = $_REQUEST['marca'];
      $placa = $_REQUEST['placa'];
      $tipo = $_REQUEST['tipo'];
      $propietario = $_REQUEST['propietario'];
      $anio = intval($_REQUEST['anio_fabricacion']);
      $cadena = "insert into `vehiculos`( `marca`, `placa`,`anio_fabricacion`, 
        `tipo`, `propietario`) values ('%s', '%s', %d, '%s', '%s');"; 
      $cadena = sprintf($cadena, $marca, $placa, $anio, $tipo, $propietario);
      echo $cadena;
      $consultaBD = $conectaBD -> query($cadena);
      
      if($consultaBD){
        // si hay existo con la inserción, 
        // se realiza un redirect a index.php
        header("Location: index.php");
      }else{
        // si exite un error
        // se captura el error
        // se hace un redirect a nuevo.php
        // además se envía el mensaje de error
        // como parámetro
        $mensaje = $conectaBD -> error;
        header("Location: nuevo.php?error=".$mensaje);
      }
?>

