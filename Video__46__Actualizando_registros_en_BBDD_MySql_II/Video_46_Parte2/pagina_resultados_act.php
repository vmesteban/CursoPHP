<!--
    @Created on : 24-dic-2016, 10:58:49
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


//    require("datos_conexion.php");

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "x_pruebas";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BBDD";
      exit();
    }

    mysqli_select_db($conexion, $database) or die("Error : No se encuentra en la BD");

    mysqli_set_charset($conexion, "utf8");

    $insertar = "SELECT * FROM productos WHERE `CODIGO ARTICULO` LIKE '%$busqueda%'";

    var_dump($insertar);

    $resultados = mysqli_query($conexion, $insertar);

    var_dump($resultados);

    while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
      echo "<form action='Actualizar.php' method='get'>";
      echo "<input type='text' name='c_art' value='" . $fila["CODIGO ARTICULO"] . "'><br>";
      echo "<input type='text' name='seccion' value='" . $fila["SECCIÓN"] . "'><br>";
      echo "<input type='text' name='n_art' value='" . $fila["NOMBRE ARTÍCULO"] . "'><br>";
      echo "<input type='text' name='precio' value='" . $fila["PRECIO"] . "'><br>";
      echo "<input type='text' name='fecha' value='" . $fila["FECHA"] . "'><br>";
      echo "<input type='text' name='p_orig' value='" . $fila["PAÍS DE ORIGEN"] . "'><br>";
      echo "<input type='submit' name='enviando' value='Actualizar'>";
      echo "</form>";
      echo "<br>";
      echo "<br>";
    }
    ?>
  </body>
</html>
