<?php

namespace Mini\Controller;

use Mini\Model\perfil;
use Mini\Model\usuario;
use Mini\Model\login;


class PerfilController{

public function index()
    {
        
	$Usuario = new Usuario();
        $usuario = $Usuario->Usuarios($_SESSION["documento"]);
       
  require APP . 'view/perfil/index.php';
       

  
    }

}
?>