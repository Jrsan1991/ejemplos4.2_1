<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <title>Uso básico de PHP</title>
  </head>
  <body>
    <h3>Listado de Vehículos</h3>
    <table>
    <tr>
        <td>Propietario</td>
        <td>Placa</td>
        <td>Marca</td>
        <td>Año Fabricación</td>
        <td>Tipo</td>
    </tr>
    <?php
      include("basedatos.php");
      function convertirMayuscula($dato){
          // función que permite 
          // pasar una cadena a mayúscula 
          return strtoupper($dato);
      }
      // se realizar la consulta a la base de datos
      $consultaBD = $conectaBD -> query("Select * from vehiculos");
      while($registro = $consultaBD -> fetch_array(MYSQLI_ASSOC)){
        $formato = "<tr>
          <td>%s</td><td>%s</td><td>%s</td><td>%d</td><td>%s</td>
          </tr>";
        // se agrega una fila a la tabla HTML
        echo sprintf($formato, convertirMayuscula($registro['propietario']), 
          convertirMayuscula($registro['placa']),
          convertirMayuscula($registro['marca']),
          convertirMayuscula($registro['anio_fabricacion']), 
          convertirMayuscula($registro['tipo']));
      }
    ?>
    </table>
    <a href="nuevo.php">Nuevo vehículo</a>
  </body>
</html>
