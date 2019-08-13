<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>SisHorario | </title>
  <!-- Icono -->
  <link rel="icon" type="text/css" href="<?php echo URL; ?>img/Logologin2.png">
  <!-- Bootstrap Estilos -->
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/bootstrap.css">
  <!-- hoja de Estilo FontAwesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/all.css">
  <!-- Mis Estilos -->
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/estilo.css">
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-success"  name="<?php echo URL; ?>primary">
    <a class="text-light navbar-brand" href="index.html"><img class="col-sm-4 img-fluid" src="<?php echo URL; ?>img/descarga.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

	  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	       <h2 class="text-light"></h2>
	    </ul>
	    <ul class="navbar-nav my-2 my-lg-0">
	      <div class="btn-group">
			  <a class="text-light activate dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>&nbsp;
			    Usuario
			  </a>
			  <div class="dropdown-menu dropdown-menu-right">
			  	<a  href="<?php echo URL; ?>login/closeSession">
			    <button class="dropdown-item" type="button" >Cerrar Sesión</button>
			    </a>
			  </div>
			</div>
	    </ul>
	  </div> -->
	</nav>
	<div id="formWrapper">

		<div id="form">
			<div class="logo">
				<img src="<?php echo URL; ?>img/Logologin2.png" alt="">
			</div>

                    <form method="POST" action="<?php echo URL; ?>login/Acceso" >
				 <div class="form-group col-sm-10">
                    <label>Documento</label>
                    <input type="num" id="txtdocumento" name="txtdocumento"  class="form-control" />
                  </div>
                   <div class="form-group col-sm-10">
                    <label>Contraseña</label>
                    <input type="password" id="txtpassword" name="txtpassword"  class="form-control" />
                  </div>
				

					 <div class="pw-view"><i class="fa fa-eye"></i></div> 
					 <p class="contrasena"><a href="<?php echo URL; ?>recuperar/index"><small>Olvidaste tu contraseña?</small></a></p>	
				<!--</div>--> 
				<br>
				<div class="form-item">
					<!-- <p class="pull-left"><a href="<?php echo URL; ?>registro/index"><small>Registrate</small></a></p> -->
					<input type="submit" id="btnIngresar" name="btnIngresar" class="login pull-right" value="Ingresar">
					<div class="clear-fix"></div>
				</div>

			</form>
		</div>
	</div>

	
	


	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!------ Include the above in your HEAD tag ---------->

	<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<script src="<?php echo URL; ?>js/jslogin.js"></script>



</body>
</html>