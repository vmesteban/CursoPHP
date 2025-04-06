<!--
    @Created on : 27-dic-2016, 22:45:49
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Documento sin titulo</title>
    <style>
      h1 , h2 {
        text-align: center;
      }

      table{
        width: 25%;
        background-color: #ffc;
        border : 2px solid #f00;
        margin: auto;

        .izq{
          text-align: right;
        }

        .der{
          text-align: left;
        }

        td{
          text-align: center;
          padding: 1px;
        }

      }
    </style>
  </head>
  <body>
    <?php
//   1º Si se ha autenticado por 1º vez genera la cookie
    $autenticado = false; // si el usuario tiene existo en el login "usuario" , "password" - devuelve TRUE
//    checkBox - genera un setcookie(...) -> 2º si la cooki no lo ha creado aparece el login
//    Si la cookie existe no aparece el formulario

    if (isset($_POST["enviar"])) { // si ha pulsado el boton de enviar
      try {
        $base = new PDO("mysql:host=localhost; dbname=x_pruebas", "root", ""); // conexion bd
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // fijar excepciones
        $sql = "SELECT * FROM usuarios_pass WHERE usuarios= :login AND password= : password"; // consulta
        $resultado = $base->prepare($sql); // ejecuta consulta
        $login = htmlentities(addslashes($_POST["login"])); //obtiene el login del formulario y lo crea como variable
        $password = htmlentities(addslashes($_POST["password"])); //obtiene el pass del form y lo guarda variable 

        $resultado->bindValue(":login", $login); // une el valor de la marca a la variable
        $resultado->bindValue(":password", $login); // une el vlaor de la marca a la variable
        $numero_registro = $resultado->rowCount(); // devuelve el total de filas afectadas
//         RESULTSET / RECORDSET
// si hay registros "usuario logueado" en la bd
        if ($numero_registro != 0) {
//SUSTITUIR POR COOKIE-->session_start(); // comienza la sesion
//SUSTITUIR POR COOKIE-->$_SESSION["usuario"] = $_POST["login"]; // almacena en la superglobal "array" nombre de quien inicio sesion
//Cambiamos por las COOKIES
          $autenticado = true;

//         1º Aqui no entra porque no ha activado el checkbox
//          1º A) Entra porque si ha activado la casilla checkbox
          if (isset($_POST["recordar"])) {//Este formulario envia la informacion para comprobar si activo la casilla
//2º Si ha activado la cookie 
//2º tiene que almacenar un usuario , el tio que haya introducido el usuario
            setcookie("nombre_usuario", $_POST["login"], time() + 86400);
          }
        } else {
          echo "Error . Usuario o contraseña incorrectos";
        }
      } catch (Exception $ex) {
        die("Error: " . $ex->getMessage()); // captura error
      }
    }
    ?>

    <?php
//    NO TRABAJOS CON SESSIONE
////    Este formulario aparece mientras el usuario no cree la session
//    if (!isset($_SESSION["usuario"])) { // no esta fijada la sesion de usuario
//      include 'Video__66__Cookies_IV_Pagina_Web_Formulario.php'; // muestra usuario
//    } else {
////    Si aparece este formulario aparece mientras el usuario cree la session
//      echo "Usuario: " . $_SESSION["usuario"]; //muestra usuario logueado
//    }
//    LOGIN NO TIENE EXITO
    if ($autenticado == false) {
      if (!isset($_COOKIE["nombre_usuario"])) {
        
      }
    }
    ?>
    <h2>Contenido de la web</h2>
    <table>
      <tr>
        <td><img src="https://3.bp.blogspot.com/-9IoEFG3ZV_Y/Vs3tMgT4ypI/AAAAAAABQRk/bcR_RxhXgLU/s1600/number-1.png" width="300" height="166"></td>
        <td><img src="https://img.freepik.com/fotos-premium/numero-dos_2227-160.jpg?w=740" width="300" height="166"></td>
      </tr>
      <tr>
        <td><img src="https://img.freepik.com/vector-premium/globo-tercer-aniversario-numero-tres-numero-d_316839-4531.jpg?w=740" width="300" height="166"></td>
        <td><img src="https://www.spreadshirt.es/image-server/v1/designs/14131366,width=178,height=178/decorado-numero-4-cuatro.png" width="300" height="166"></td>
      </tr>
        <td>Casilla de verificacion</td>
      </tr>
    </table>
  </body>
</html>
