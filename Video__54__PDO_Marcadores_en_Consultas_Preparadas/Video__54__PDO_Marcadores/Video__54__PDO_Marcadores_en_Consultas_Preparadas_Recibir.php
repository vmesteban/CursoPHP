<!--
    @Created on : 25-dic-2016, 11:08:08
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Marcadores de una consulta preparadas
                  Uso de arrays asociativos en consultas preparadas
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

    try {

      $base = new PDO("mysql:host=localhost;dbname=x_pruebas", "root", "");
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $base->exec("SET CHARACTER SET utf8");
      $sql = "SELECT * FROM productos WHERE `NOMBRE ARTÍCULO` = ?";
      $resultado = $base->prepare($sql);
      $resultado->execute(array($busqueda));
      while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo " Seccion : " . $registro["SECCIÓN"] .
          " Nombre Articulo: " . $registro["NOMBRE ARTÍCULO"] .
          " Precio : " . $registro["PRECIO"] .
          " Fecha : " . $registro["FECHA"] . 
          " Pais de Origien : " . $registro["PAÍS DE ORIGEN"] .
          "<br>";
      }
      $resultado->closeCursor();
    } catch (Exception $ex) {
      die("Error: " . $ex->getMessage());
    } finally {
      $base = null;
    }
    ?>
  </body>
</html>
