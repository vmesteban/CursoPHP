<!--
    @Created on : 30-dic-2016, 11:04:34
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
//    Recibimos los datos de la imagen
//    Usar variable superglobal : ARRAY SUPERGLOBAL VARIOS DATOS DE LA IMAGEN
//    QUE LE ESTAMOS ENVIANDO
//     Podemos almacenar informacion 
//   •   type - tipo de archivo -> 
//   •   name - nombre archivo -> 
//   •   size - tamaño de la imagien -> 
     •   tmp_name - direccion de la directorio temporal donde se almacena el archivo antes de subirse al servidor
        porque antes de subirse la imagen al servidor , 
        1º se almacena en un directorio temporal del servidor
        2  se almacena en el directorio de imagenes del servidor
     •   error

carpeta temporal 

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $nombre_imagen = $_FILES['imagen']['name'];
    $tipo_imagen = $_FILES['imagen']['type'];
    $tamano_imagen = $_FILES['imagen']['size'];

    echo $_FILES['imagen']['size'];

//  Ruta de la carpeta destino del servidor
//  Raiz del SERVIDOR - htdoc
    // $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';
    $carpeta_destino = 'Video__83__imagenes/';
//    ahora pasar por la carpeta temporal a la carpeta uploads
//    movemos la imagen del directorio temporal al directorio seleccionado
    move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino . $nombre_imagen);
    ?>
  </body>
</html>
