<!--
    @Created on : 24-dic-2016, 18:03:17
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
Insertar articulos en todos los campos
Saber el tipo de campo "varchar"

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $c_art = $_GET["c_art"];
    $secc = $_GET["secc"];
    $n_art = $_GET["n_art"];
    $pre = $_GET["pre"];
    $fec = $_GET["fec"];
    $p_ori = $_GET["p_ori"];

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "x_pruebas";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BBDD";
      exit();
    }

    mysqli_select_db($conexion, $database) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $sql = "INSERT INTO productos (`CODIGO ARTICULO` , SECCIÓN , `NOMBRE ARTÍCULO` , PRECIO, FECHA, `PAÍS DE ORIGEN`) VALUES (?,?,?,?,?,?,?)";

//    mysqli_stmt_bin_param

    $resultado = mysqli_prepare($conexion, $sql);

    $ok = mysqli_stmt_bind_param($resultado, "ssssss", $c_art, $secc, $n_art, $pre, $fec, $p_ori);

    $ok = mysqli_stmt_execute($resultado);

    if ($ok == false) {
      echo "Error al ejecutar la consulta";
    } else {
//      $ok = mysqli_stmt_bind_result($resultado, $codigo, $seccion, $nom, $precio, $fecha, $pais);

      echo "Agregado Nuevo Registro ";
      mysqli_stmt_close($resultado);
    }
    ?>

  </body>
</html>
