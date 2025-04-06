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
        width: 300px;
        margin: auto;
        background-color: #FFC;
        border: 2px solid #F00;
        padding: 5px;
      }

      td{ 
        text-align: center;
      }
      h1{
        text-align: center;
        color: #F00;
      }
     </style> 
  </head>
  <body>
    <h1>Registro de Artículos</h1>
    <form name="form1" method="post" action="Video__56__PDO_Insertar_Registros_Recibir_BBDD.php">
      <table>
        <tr>
          <td>Codigo Articulo</td>
          <td><label for="cod_art"></label>
            <input type="text" name="cod_art" id="cod_art"></td>
        </tr>
        <tr>
          <td>Seccion</td>
          <td><label for="seccion"></label>
            <input type="text" name="seccion" id="seccion"></td>
        </tr>
        <tr>
          <td>Nombre Articulo</td>
          <td><label for="n_art"></label>
            <input type="text" name="n_art" id="n_art"></td>
        </tr>
        <tr>
          <td>Precio</td>
          <td><label for="precio"></label>
            <input type="text" name="precio" id="precio"></td>
        </tr>
        <tr>
          <td>Fecha</td>
          <td><label for="fecha"></label>
            <input type="text" name="fecha" id="fecha"></td>
        </tr>
        <tr>
          <td>Pais de Origen</td>
          <td><label for="p_orig"></label>
            <input type="text" name="p_orig" id="p_orig"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
          <td align="center"><input type="submit" name="Borrar" id="Borrar" value="Borrar"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
