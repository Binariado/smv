<?php

session_start();
 ?>

<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8"></meta>
	<title>Se armo el viaje</title>
  <script src="js/glDatePicker.min.js"></script>

	<link rel="stylesheet" type="text/css" href="font_icon/style.css" >
	<link rel="stylesheet" type="text/css" href="user.css"></link>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src=js/js.js></script>
	<script type="text/javascript" src="js/jquery-2.2.3.min.js">    </script>
  <script type="text/javascript" src="js/ajax.js"></script>
  <link href="css/styles/glDatePicker.default.css" rel="stylesheet" type="text/css">
  <script >
  $(window).load(function()
         {
             $('ddate').glDatePicker();
         });
  </script>
   </head>
   <body >
		<input id="user_menu" type="checkbox"></input>
       <header role="navegation">
        <nav class="menu">
            <ul>
				<li><a  id="">Logo</a></li>
				<li><a id="">Documentación</a></li>
				<li><a  id="">Contactanos</a></li>
				<div class="user_my">
				  <!--<li class="no_select"><label class="icon-user fs"  id="login"><a></a></label></li>-->
				  <li class="no_select"><label for="user_menu" id="User"><label class="icon-user fs"  id="login"></label><a style=""><?php echo $_SESSION['nombre']; ?></a></label></li>
				</div>
		    </ul>
        </nav>
      </header>
      <div class="inp" id="menu_user">
	   <center>
	    <form>
		<label>User menu en desarrollo</label><br>
        <a href="php/logout.php"><input type="button" name="name" value="cerrar sesion"></a>
		</form>
	   </center>
	  </div>

	  <center>
	 <div id="pub_soli">
	    <div  id="viaje_arm">

		 <form action="" data="">
           <input type="text" id="ls"  placeholder="lugar de salida"><br>
           <input type="text" id="ll"  placeholder="lugar de llegada"><br>
           <input type="date" id="date" name="name" value="" placeholder="Fecha" onFocus="calendario(this)"><br>
           <input type="time" name="hora" id="hora" placeholder="Hora de salida"><br>
           <input type="number" id="cupo" placeholder="CNatidad de psajeros"><br>
           <input type="text" id="precio" name="name" value="" placeholder="Precio"><br><br>
           <button type="button" onclick="publicar()">Publicar Viaje</button>
		 </form>
		</div>
	    <div  id="solic_arm">
          <input type="text" id="lls" placeholder="lugar de salida"><br>
          <input type="text" id="lll" placeholder="lugar de llegada"><br>
          <input type="date" id="ddate" name="name" value="" placeholder="Fecha" onFocus="calendario(this)">
          <br><br>
          <button type="button" onclick="solicitar()" >Solicitar</button>
		</div>
		<div class="option_">
		  <div id="arm_v" class="arm_v ac_b" onclick="p_v(this)"> <a > ARMAR UN VIAJE</a></div>
		  <div id="arm_s" class="arm_s azul ac_w d_b" onclick="p_v(this)"> <a >SOLICITAR UN VIAJE</a></div>
		</div>
      </div>
	  </center>
      <script type="text/javascript">
	    function p_v(obe){

		  if( obe.id=="arm_v"){
		    obe.setAttribute("class","arm_v azul ac_w");
			document.getElementById("arm_s").setAttribute("class","arm_s ac_b");
			document.getElementById("solic_arm").setAttribute("style","display:none");
			document.getElementById("viaje_arm").setAttribute("style","display:block");
		  }
		  if( obe.id=="arm_s"){
		    obe.setAttribute("class","arm_s azul ac_w");
			document.getElementById("arm_v").setAttribute("class","arm_v ac_b");
			document.getElementById("viaje_arm").setAttribute("style","display:none");
			document.getElementById("solic_arm").setAttribute("style","display:block");
		  }
		}
	  </script>
	  <footer class="pie_pag">
            <center><a>Copyright © 2016-2016</a></center>

	  </footer>

   </body>
</html>
