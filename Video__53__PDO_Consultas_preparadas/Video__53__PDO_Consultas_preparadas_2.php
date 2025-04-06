<!--
    @Created on : 25-dic-2016, 1:15:31
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Curso PHP MySQL. PDO Consultas preparadas. Vídeo 53
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <label>Buscar:
        <input type="text" name="buscar">
      </label>
      <input type="submit" name="enviado" value="!Dale!">
    </form>

    <?php
    try {
//  Objeto : de tipo conexion
      $base = new PDO('mysql:host=localhost; dbname=x_pruebas', 'root', '');

      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $base->exec("SET CHARACTER SET utf8");

//    $sql = "SELECT C , B , G FROM productos WHERE C = ?";
      $sql = "SELECT `CODIGO ARTICULO` , SECCIÓN , `NOMBRE ARTÍCULO` , PRECIO, FECHA, `PAÍS DE ORIGEN` FROM productos WHERE `NOMBRE ARTÍCULO` = ?";


      if (isset($_GET["buscar"]) && !empty($_GET["buscar"])) {
        $buscar = $_GET["buscar"];

//    llamamos al objeto conexion y hacemos la conexion con prepare(sql)
//      Objeto $base llama por parametro la consulta
//        prepare devuelve un objeto de tipo PDOstatement que se almacena en la variable $resultado que es otro objeto
//      $resultado es un objeto de tipo PDOStatement
        $resultado = $base->prepare($sql);
//                        Pasarle por parametro 
//      $resultado->execute(array("Destornillador"));
        $resultado->execute(array("$buscar"));

        //$sql = "SELECT `CODIGO ARTICULO` , SECCIÓN , `NOMBRE ARTÍCULO` , PRECIO, FECHA, `PAÍS DE ORIGEN` FROM productos WHERE `NOMBRE ARTÍCULO` = ?";

        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

          echo "Codigo Articulo " . $registro['CODIGO ARTICULO'] . ' ';
          echo "Seccion " . $registro['SECCIÓN'] . ' ';
          echo "Nombre Articulo " . $registro['NOMBRE ARTÍCULO'] . ' ';
          echo "Precio " . $registro['PRECIO'] . ' ';
          echo "Fecha " . $registro['FECHA'] . ' ';
          echo "Pais de Origen " . $registro['PAÍS DE ORIGEN'] . ' ';
          echo '<br>';
//        Despues tenemos que cerrar el cursor
        }
        $resultado->closeCursor();
      }
    } catch (Exception $ex) {
      die("Error : " . $ex->getMessage());
    }
    ?>
  </body>
</html>






 