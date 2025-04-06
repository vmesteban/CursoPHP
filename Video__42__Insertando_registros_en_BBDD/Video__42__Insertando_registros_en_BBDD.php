<!--
    @Created on : 23-dic-2016, 19:17:02
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
  </head>
  <body>
    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "x_pruebas";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_errno($conexion)) {
      echo "Error en la base de datos";
      exit();
    }

    mysqli_select_db($conexion, $database) or die("Error en la base de datos");

    mysqli_set_charset($conexion, "utf8");

//    $consulta = "SELECT * FROM productos WHERE C = $busqueda";
    $insertar = "SELECT * FROM productos WHERE `PAÍS DE ORIGEN` = 'USA';";

    $resultado = mysqli_query($conexion, $insertar);

    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
      echo '<table><tr><td>';
      echo $fila["SECCIÓN"] . "</td><td>";
      echo $fila["NOMBRE ARTÍCULO"] . "</td><td>";
      echo $fila["PRECIO"] . "</td><td>";
      echo $fila["FECHA"] . "</td><td>";
      echo $fila["PAÍS DE ORIGEN"] . "</td><td>";
      echo "</td></tr>";
    }
    
    echo "</table>";

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    ?>
  </body>
</html>
