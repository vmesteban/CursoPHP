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
//    cuadro de texto seccion del formulario

    $busqueda_cart = $_POST["cod_art"];
    $busqueda_sec = $_POST["seccion"];
    $busqueda_nart = $_POST["n_art"];
    $busqueda_precio = $_POST["precio"];
    $busqueda_fecha = $_POST["fecha"];
    $busqueda_porig = $_POST["p_orig"];

    try {
      $base = new PDO("mysql:host=localhost;dbname=x_pruebas", "root", "");
//    Le estamos diciendo como propiedades esta excepciones - ATRIBUTOS
//      crear estos objetos en caso de error de tipo EXCEPCIOn
//       lo cual hace que podamos rescatar los erroes , si se produce podemos verlo y hacerlo
//        Si comento esta linea , no se crea el objeto error
//      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $base->exec("SET CHARACTER SET utf8");
//      MARCADOR siempre sera : 

      $sql = "INSERT INTO productos (`CODIGO ARTICULO`, SECCIÓN, `NOMBRE ARTÍCULO`, PRECIO, FECHA, `PAÍS DE ORIGEN`) VALUES (:cod_art, :seccion, :n_art, :precio, :fecha, :p_orig)";

      $resultado = $base->prepare($sql);
//      cambiamos el valor del formulario : nos busque el marcador
//      posicion del array asociativo depende del valor busqueda
      $resultado->execute(array(":cod_art" => $busqueda_cart, ":seccion" => $busqueda_sec, ":n_art" => $busqueda_nart, ":precio" => $busqueda_precio, ":fecha" => $busqueda_fecha, ":p_orig" => $busqueda_porig));

      echo "Registro insertado correctamente";
      
      $resultado->closeCursor();
//      Clase Exception -> Objeto $ex
    } catch (Exception $ex) {
//       Accedemos el objeto->metodo
      die("<b>Error: " . $ex->getMessage());
    } finally {
      $base = null;
    }
    ?>
  </body>
</html>
