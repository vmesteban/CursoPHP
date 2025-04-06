<!--
    @Created on : 29-dic-2016, 19:04:55
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

      td{
        border: 1px dotted #f00;
      }
      table {
        text-align: center;
      }
    </style>
  </head>
  <body>

    <table>
      <tr><td>NOMBRE DEL ARTICULO</td></tr>
    
    <?php
//    require_once ("controlador/Productos_controlador.php");
    foreach ($matrizProductos as $registro) {
      echo "<tr><td> " . $registro["NOMBRE ARTÍCULO"] . " </td></tr>";
    }
    ?>
    </table>
  </body>
</html>

