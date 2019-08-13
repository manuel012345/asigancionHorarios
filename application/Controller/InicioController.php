<?php

namespace Mini\Controller;

use Mini\Model\Inicio;

class InicioController{

public function index()
    {
        // load views
       
        require APP . 'view/inicio/index.php';
       
       
    }

}
?>