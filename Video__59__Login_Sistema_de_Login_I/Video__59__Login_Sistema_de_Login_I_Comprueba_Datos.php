<!--
    @Created on : 26-dic-2016, 1:29:55
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : 
Login.php -> formulario : se valida con la bd 
                  Si esta el usuario se redirige a una pagina pag1.php
                  Si no lo esta redirige a una pagina Prohibido.php
              Podemos hacer que este en un bucle repitiendo la entrada el login
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Procesa Login</title>
    <style>
    </style>
  </head>
  <body>
    <?php
    try {

      $base = new PDO("mysql:host=localhost; dbname=x_pruebas", "root", "");
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM usuarios_pass WHERE usuarios =:login AND password= :password";
      $resultado = $base->prepare($sql);
      $login = htmlentities(addslashes($_POST["login"])); // convierte todo simbolo en html
      $password = htmlentities(addslashes($_POST ["password"])); // convierte todo simbolo en html
//      bindValue -> 
//      bindParam -> en vez de usar marcadores usan parametros
      $resultado->bindValue(":login", $login);
      $resultado->bindValue(":password", $password);
      $resultado->execute(); // sentencia sql ejecutada
//      saber si esta el usuario dentro de la base de datos
//      mediante LA FUNCION rowCount() devuelve el numero de usuarios 
//       0 - no existe , 1 - existe el usuario
      $numero_registro = $resultado->rowCount();

//      si el usuario existe
      if ($numero_registro != 0) {
        echo "Hello Friend <br>";
        echo "Usuario con registro";
      } else {
//        Si no existe bucle dentro de la pagina de login
//        REDIRIGIR a una PAGINA mediante metodo HEADER
        header("Location: Video__59__Login_Sistema_de_Login_I.php");
      }
    } catch (Exception $ex) {
      echo "Error conexion : <br>";
      die("Error :  " . $ex->getMessage());
    }
    ?>
  </body>
</html>
