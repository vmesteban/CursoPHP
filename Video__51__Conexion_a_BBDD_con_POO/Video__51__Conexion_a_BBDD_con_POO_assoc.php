<!--
    @Created on : 24-dic-2016, 19:09:18
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : 
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      body{
        background-color: #011;
        color: #fff;
      }

      table{
        border: 1px solid #f00;
        background-color: #000;
        color: #fff;
      }


    </style>
  </head>
  <body>
    <?php
    $conexion = new mysqli("localhost", "root", "", "x_pruebas");

    if ($conexion->connect_errno) {
      echo "Fallo la conexion" . $conexion->connect_errno;
    }

    $conexion->set_charset("utf8");

    $sql = "SELECT * FROM productos";

    $resultado = $conexion->query($sql);

// Si hay error : que mate la ejecucion
    if ($conexion->errno) {
      die($conexion->error);
    }

//    while ($fila = mysqli_fetch_array($resultados, MYSQL_ASSOC));

    while ($fila = $resultado->fetch_assoc()) {
      echo '<table><tr><td>';
      echo $fila["CODIGO ARTICULO"] . '</td><td>';
      echo $fila["SECCIÓN"] . '</td><td>';
      echo $fila["NOMBRE ARTÍCULO"] . '</td><td>';
      echo $fila["PRECIO"] . '</td><td>';
      echo $fila["FECHA"] . '</td><td>';
      echo $fila["PAÍS DE ORIGEN"] . '</td><td>';
      echo '</table>';
      echo '<br>';
    }
    
    $conexion->close();
    ?>
  </body>
</html>
