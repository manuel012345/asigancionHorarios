<?php

namespace Mini\Controller;

use Mini\Model\sede;

class sedeController{

	public function index($mensaje = null, $textoMensaje = null){

		$sede = new sede();
		$sedes = $sede->listarSede();
		$municipios = $sede->listarMunicipio();

		
		require APP . 'view/sede/index.php';
	}

	public function Ingresarsede(){

		if (isset($_POST["btnIngresarS"])) {
			$sede=new sede();

			$result=$sede->Ingresarsede($_POST["idMunicipio"],$_POST["nombre"],$_POST["direccion"],$_POST["telefono"],$_POST["correo"],$_POST["director"]);
		}

		header('location: ' . URL . 'sede/index/1');

	}
}

?>