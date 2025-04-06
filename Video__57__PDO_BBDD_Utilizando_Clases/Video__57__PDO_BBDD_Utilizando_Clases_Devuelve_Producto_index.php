<!--
    @Created on : 25-dic-2016, 21:51:13
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Existen 2 formas de programacion de BBDD en PHP

A - procedimental 
           1 - mysqli 
           2 - PDO

B - Poo

Archivo de conexion - PHP 

POO Modularizacion : 
    1-Dividir el codigo en partes o archivos
    2-Sirve para localizar facilmente los errores
    3-Reutilizacion del codigo
-->
<?php
require "Video__57__PDO_BBDD_Utilizando_Clases_Devuelve_Producto.php";

//    Crear una instancia para que se ejecute el constructor de esta clase
//    Al ejecutar este objeto comienza la app , ya que llama a los objetos
//     y metodos de la clase padre
$productos2 = new DevuelveProductos();
//    get_productos: este metodo devuelve un array
$array_productos = $productos2->get_productos();
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

