<?php

namespace Mini\Controller;

use Mini\Model\centro;

class centroController{

	public function index($mensaje = null, $textoMensaje = null){

		$centro = new centro();
		$centros = $centro->listarCentro();
		$sedes = $centro->listarSede();

		require APP . 'view/_templates/header.php';
		require APP . 'view/centro/index.php';
	}

	public function IngresarCentro(){

		if (isset($_POST["btnIngresarC"])) {
			$centro=new centro();

			$result=$centro->Ingresarcentro($_POST["idSede"],$_POST["nombre"],$_POST["direccion"],$_POST["telefono"],$_POST["correo"],$_POST["director"]);
		}

		header('location: ' . URL . 'centro/index/1');

	}
}
	?>