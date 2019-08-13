<?php

namespace Mini\Controller;


use Mini\Model\usuario;




class UsuarioController{

    public function index($mensaje = null, $textoMensaje = null){

        $usuario = new usuario();
        $usuarios = $usuario->TodosInstructores();

        $tipoUsuarios = $usuario ->TodosUsuarios();
        $TipoDocumentos = $usuario ->TodosDocumentos();
        $detalleusuarios = $usuario ->TodosDetalles();

        
        require APP . 'view/usuario/index.php';
    }

    public function IngresarInstructor(){

        if (isset($_POST["BtnIngresarIns"])) {
            $usuario=new usuario();

            $result=$usuario->IngresarInstruc($_POST["tipousuario"],$_POST["tipodoc"],$_POST["documento"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["genero"],$_POST["password"],'');
            // var_dump($result);
            // exit();
           
        }

        header('location: ' . URL . 'usuario/index');

}
    }





    
?>