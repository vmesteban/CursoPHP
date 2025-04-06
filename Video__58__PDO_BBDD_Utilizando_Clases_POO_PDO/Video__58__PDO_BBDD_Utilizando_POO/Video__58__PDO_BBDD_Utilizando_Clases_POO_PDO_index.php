<!--
    @Created on : 26-dic-2016, 0:36:26
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
require 'Video__58__PDO_BBDD_Utilizando_Clases_POO_PDO_Devuelve.php';

//Variable introducido por el formulario
$pais = $_GET["buscar"];

// Creamos un objeto de la clase DevuelveProductos
$productos = new DevuelveProductos(); // Conecta a la base de datos
//Invocamos el metodo get_productos($pais) de la clase DevuelveProductos
// se encarga de devolver todos los productos
$array_productos = $productos->get_productos($pais);
//
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>

      table{
        height: auto;
        width: 900px;
        align-content: center;
        background-color: #000;
        color: #fff;
        border: 1px solid #f00;
        padding: auto; 
        margin: auto;
      }
      td {
        align-content: center;
        height: auto;
        width: auto;
      }

    </style>
  </head>
  <body>
    <?php
    foreach ($array_productos as $elemento) {
      echo "<table><tr><td>";
      echo $elemento["CODIGO ARTICULO"] . '</td><td>';
      echo $elemento["SECCIÓN"] . '</td><td>';
      echo $elemento["NOMBRE ARTÍCULO"] . '</td><td>';
      echo $elemento["PRECIO"] . '</td><td>';
      echo $elemento["FECHA"] . '</td><td>';
      echo $elemento["PAÍS DE ORIGEN"] . '</td><td></tr></table>';

      echo "<br>";
      echo "<br>";
    }
    ?> 
  </body>
</html>
