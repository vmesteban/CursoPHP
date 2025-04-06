<!--
    @Created on : 24-dic-2016, 1:07:30
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
3º archivos 
-Formulario de busqueda.
-Resultado de busqueda.
-Actualizar la informacion. ( actualizar los archivos )


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
    $database = "x_pruebas";
    $password = "";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_error($conexion)) {
      echo "Error en la conexion" . mysqli_error($conexion) . " - " . mysqli_errno($conexion);
      exit();
    }

    mysqli_select_db($conexion, $database) or die("Error al conectar bd");

    mysqli_set_charset($conexion, "utf8");

//    $sql = "SELECT * FROM productos WHERE B LIKE '%$busqueda%';";
    $cod = $_GET["c_art"];
    $sec = $_GET["seccion"];
    $nom = $_GET["n_art"];
    $pre = $_GET["precio"];
    $fec = $_GET["fecha"];
    $por = $_GET["p_org"];


    $sql = "UPDATE producto SET `CODIGO ARTICULO`='$cod', SECCIÓN = '$sec' , `NOMBRE ARTÍCULO`='$nom' , PRECIO ='$pre' , FECHA ='$fec' , `PAÍS DE ORIGEN` ='$por' WHERE  `CODIGO ARTICULO` ='$cod';";

    $resultados = mysqli_query($conexion, $sql);
    if ($resultados == false) {
      echo "Error en la consulta";
    } else {
// Muestra los datos de una tabla a formulario
      while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
        echo "<form action='Video__46__Actualizar.php' method='get'>";
        echo "<input type='text' name='c_art' value='" . $fila["CODIGO ARTICULO"] . "'><br>";
        echo "<input type='text' name='n_art' value='" . $fila["SECCIÓN"] . "'><br>";
        echo "<input type='text' name='seccion' value='" . $fila["NOMBRE ARTÍCULO"] . "'><br>";
        echo "<input type='text' name='precio' value='" . $fila["PRECIO"] . "'><br>";
        echo "<input type='text' name='fecha' value='" . $fila["FECHA"] . "'><br>";
        echo "<input type='text' name='p_orig' value='" . $fila["PAÍS DE ORIGEN"] . "'><br>";
        echo "<input type='submit' name='enviando' value='Actualizar'>";
        echo "</form>";
        echo '<br>';
      }
    }
    echo '<br>';
//    mysqli_free_result($resultados);
    mysqli_close($conexion);
    ?>
  </body>
</html>
