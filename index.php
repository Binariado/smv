<?php


?>

<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8"></meta>
	<title>Se armo el viaje</title>
	<link rel="stylesheet" type="text/css" href="font_icon/style.css" >
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src=js/js.js></script>
	<script type="text/javascript" src="js/jquery-2.2.3.min.js">    </script>
  <script type="text/javascript" src="js/ajax.js">

  </script>

<script type="text/javascript">
   function lo() {
     document.getElementById('l').style.display="block";
     document.getElementById('r').style.display="none";
   }
   function re() {
     document.getElementById('r').style.display="block";
     document.getElementById('l').style.display="none";
   }
   function auto() {
     // configuramos el control que hemos de utilizar para la busqueda de productos
       $("#txtProducto").autocomplete({
           source: "json.json",
           minLength: 1,
           select: productoSeleccionado,
           focus: productoFoco
       });
   }
  </script>
   </head>
   <body onload="mostrarv()" >
	    <input id="loger" type="checkbox"></input>
		<input id="regis" type="checkbox"></input>
       <header role="navegation">
        <nav class="menu">
            <ul>
				<li><a  id="">Logo</a></li>
				<li><a id="">Documentación</a></li>
				<li><a  id="">Contactanos</a></li>
				<div class="regis_login">
				  <li class="no_select"><label class="icon-user fs"  id="login"><a></a></label></li>
				  <li class="no_select"><label for="regis" id="registrar"><a>Registrate</a></label></li>
				</div>
		    </ul>
        </nav>
      </header>
      <div class="inp" id="logout">
	   <center>
	    <form id="l"  name="l" action="php/login.php" method="post">
		<label>Inicio de sesión</label>
		 <input type="text" placeholder="Usuario" name="us" id="us"></input>
		 <input type="text" placeholder="Contraseña" id="p" name="p"></input>
		 <a href="#" class="fs" onclick="login()"><div  class="icon-user " id="loguearme"><span>Entrar<span></div></a>
		<!-- -->
    <?php
    require_once 'php/fb_init.php';
    if (isset($_SESSION['facebook_access_token'])) {
      $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);

    try {
    $response = $fb->get('/me');
    $userNode = $response->getGraphUser();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;}
    }else{
    $helper = $fb->getRedirectLoginHelper();
    $permissions = []; // optional
    $loginUrl = $helper->getLoginUrl('http://localhost/smv/php/login-callback.php', $permissions);

    echo '<a href="' . $loginUrl . '"><div class="facebook_loging">Con facebook</div></a>';
    }
     ?>
		  <a href="#"><div class="twitter_loging">con twitter</div></a>
		  <a href="#"><div class="google_loging">Con goolge</div></a>
		</form>
	   </center>
	  </div>
      <div class="inp " id="registro">
	   <center>
	    <form name="r" id="r" action="php/registrar.php" method="post">
		<label>Registrarme</label>
          <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre y Apellidos">
          <input type="text" name="email" id="email" value="" placeholder="E-mail">
          <input type="text" name="contrasena" id="contrasena" value="" placeholder="Clave">
          <input type="text" name="ccon"  id="ccon" value="" placeholder="Confirmar Clave">
          <input type="text" name="telefono" id="telefono" value="" placeholder="Telefono">
          <a href="#"><div id="registrarme" onclick="registro()"><span>Registrarme</span></div>	</a>
		  <div class="facebook_loging">Con facebook</div>
		  <div class="twitter_loging">con twitter</div>
		  <div class="google_loging">Con goolge</div>
		</form>
	   </center>
	  </div>



	       <div id="Viajes_p">
		       <a>Viajes populares</a>

	       </div>

	  <footer class="pie_pag">
            <center><a>Copyright © 2016-2016</a></center>

	  </footer>

   </body>
</html>
