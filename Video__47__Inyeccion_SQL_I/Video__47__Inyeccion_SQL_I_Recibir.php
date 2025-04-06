 <!--
    @Created on : 24-dic-2016, 12:44:51
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
    $busqueda = $_GET["buscar"];

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "x_pruebas";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
      echo "Error en la conexion bd";
      exit();
    }

    mysqli_select_db($conexion, $database) or die("Error en la conexion");

    mysqli_set_charset($conexion, "utf8");

    //$insertar = "SELECT * FROM productos WHERE `NOMBRE ARTÍCULO` LIKE '%$busqueda%'";
     $insertar = "SELECT * FROM productos WHERE `NOMBRE ARTÍCULO` = '$busqueda'";

    $resultado = mysqli_query($conexion, $insertar);

    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
      echo "<table>";
      echo "<tr><td>";
      echo $fila["CODIGO ARTICULO"] . "</td><td>";
      echo $fila["SECCIÓN"] . "</td><td>";
      echo $fila["NOMBRE ARTÍCULO"] . "</td><td>";
      echo $fila["PRECIO"] . "</td><td>";
      echo $fila["FECHA"] . "</td><td>";
      echo $fila["PAÍS DE ORIGEN"] . "</td><td>";
      echo "</td></tr>";
      echo "</table>";
    }

    ?>

  </body>
</html>
