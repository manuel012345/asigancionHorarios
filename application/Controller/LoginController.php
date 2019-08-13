<?php

namespace Mini\Controller;

use Mini\Model\Login;
use Mini\Libs\Helper;
use Mini\Core\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class LoginController extends Controller {

    var $resp = "datos correctos";
    var $idTipoUsuario = array('2', '4');

    public function index() {
          require APP . 'view/login/index.php';

//        $this->render('login/index', 'Iniciar Sesión', null, false);
    }

    public function Acceso() {

        if (isset($_POST["btnIngresar"])) {
            $Login = new Login();
            $result = $Login->ValidarLogin($_POST["txtdocumento"], $_POST["txtpassword"]);

            if ($result->mensaje == $this->resp) {
                //recuperamos el hash
                $hash = $result->password;
                //verificamos que la contraseña ingresada sea igual con la de la base de datos
                if (password_verify($_POST["txtpassword"], $hash)) {
                    //Si coincide se crea la sesion de navegacion
//                    session_start();
                    $_SESSION['rol'] = $result->idTipoUsuario;
                    $_SESSION['tipoDocumento'] = $result->tipoDoc;
                    $_SESSION['documento'] = $result->documento;
                    $_SESSION['usuario'] = $result->nombre;
                    $_SESSION['correo'] = $result->correo;
                    //ahora segun el tipo de usuario se redirecciona
                    if ($result->idTipoUsuario == $this->idTipoUsuario[0] ||
                            $result->idTipoUsuario == $this->idTipoUsuario[1]) {
                        //redirecciona a perfil
                        header('location: ' . URL . 'perfil/index');
                        return;
                    } else {
                        //redirecciona a home
                        header('location: ' . URL . 'home/index');
                        return;
                    }//fin if validacion tipo usuario
                }// fin if verificacion password
                else {
                    header('location: ' . URL . 'login/index/contraseña Incorrecta');
                    return;
                }
            } else {
                header('location: ' . URL . 'registro/index/Usuario no Registrado');
                return;
            }// fin if resultado base de datos
        }//if boton
        header('location: ' . URL . 'login');
    }

    public function closeSession() {
        session_unset();
        session_destroy();
        header('Location:' . URL . 'login/index');
    }

}

?>