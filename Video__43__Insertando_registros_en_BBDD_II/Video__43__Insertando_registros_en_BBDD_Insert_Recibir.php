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
    <style>
      table{
        align-content: center;
        width: auto;
        height: auto;
        border: 1px solid #f00;
        padding: 10px;
      }
    </style>
    <?php
 
    $sec = $_GET["seccion"];
    $n_art = $_GET["n_art"];
    $precio = $_GET["precio"];
    $fec = $_GET["fecha"];
    $por = $_GET["p_orig"];

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "x_pruebas";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_errno($conexion)) {
      echo "Error en la base de datos";
      exit();
    }

    mysqli_select_db($conexion, $database) or die("Error en la conexion BD");

    mysqli_set_charset($conexion, "utf8");

    $insertar = "INSERT INTO PRODUCTOS (SECCIÓN,`NOMBRE ARTÍCULO`,PRECIO,FECHA,`PAÍS DE ORIGEN`) VALUES (\"$sec\",\"$n_art\",\"$precio\",\"$fec\",\"$por\");";

    $resultados = mysqli_query($conexion, $insertar);

    if ($resultados == false) {
      echo "Error" . mysqli_error($conexion);
    } else {
      echo "Registro Guardado";
      echo "<table>";
      echo "<tr><td>$sec</td></tr>";
      echo "<tr><td>$n_art</td></tr>";
      echo "<tr><td>$precio</td></tr>";
      echo "<tr><td>$fec</td></tr>";
      echo "<tr><td>$por</td></tr>";
      echo "</table>";
    }

    mysqli_close($conexion);
    ?>
  </body>
</html>
