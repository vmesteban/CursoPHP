<!--
    @Created on : 23-dic-2016, 18:13:59
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
        height: auto;
        width: auto;
        border : 1px solid #f00;
        padding: 1px;
      }
    </style>
    <?php

    function ejecuta_consulta($labusqueda) {

      $db_host = "localhost";
      $db_usuario = "root";
      $db_pass = '';
      $db_nombre = "x_pruebas";

//    capturar datos que vienen de otra pagina
//    $busqueda = $_GET["buscar"];

      $conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);

      if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BD";
        exit();
      }

      mysqli_select_db($conexion, $db_nombre) or die("Error en la conexion");

      mysqli_set_charset($conexion, "utf8");

//    $consulta = "SELECT * FROM producto WHERE G LIKE \"%$busqueda\";";
      $consulta = "SELECT * FROM productos WHERE `NOMBRE ARTÍCULO` LIKE '%$labusqueda%'";

      $resultados = mysqli_query($conexion, $consulta);

      while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
        echo '<table><tr><td>';
        echo $fila["SECCIÓN"] . '</td><td>';
        echo $fila["NOMBRE ARTÍCULO"] . '</td><td>';
        echo $fila["PRECIO"] . '</td><td>';
        echo $fila["FECHA"] . '</td><td>';
        echo $fila["PAÍS DE ORIGEN"] . '</td><td>';
        echo '</td></tr>';
      }
      echo '</table>';
      mysqli_close($conexion);
    }
    ?>
  </head>
  <body>
    <?php
    if (isset($_GET["buscar"])) { // ¿ Esta fijado 'buscar' - NO 
//    Si la variable &mibusqueda es diferente de null - Ejecutar la consulta
      $mibusqueda = $_GET["buscar"];
      ejecuta_consulta($mibusqueda);
//    Indicar al formulario se envia a la misma pagina
//    $_SERVER["pagina"] - Pagina del servidor a la que tiene que llamar 
//      Pagina que tiene llamar es ella misma 
    } else {
      $mipagina = $_SERVER["PHP_SELF"];
      echo(
      "<form action='" . $mipagina . "' method='get'>
        <label>Buscar:
        <input type='text' name='buscar'></label>
        <input type='submit' name='enviando'>
        </form>");
    }
    ?>
  </body>
</html>
