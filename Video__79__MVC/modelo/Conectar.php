<!--
    @Created on : 29-dic-2016, 19:05:39
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
//      metodo estatico - solo necesito nombre de la clase
//      metodo que pertecen a la clase ,  no necesita instancias
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class Conectar {

      public static function conexion() {
        try {
//                            driver:host
          $conexion = new PDO('mysql:host=localhost; dbname=x_pruebas', 'root', '');
          $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $conexion->exec("SET CHARACTER SET UTF8");
        } catch (Exception $ex) {
          die("Error " . $ex->getMessage() . " - " . $ex->getLine());
        }
        return $conexion;
      }

    }

    // fin de la clase Conectar
    ?>
  </body>
</html>
