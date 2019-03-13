<?php
/******************************************************************************
    *
    * Filename: Login.php
    *
    * Propósito: Insertar Nuevo Usuarios En La Base De Datos E Inicio De Sesión (registro y validación de usuarios).
    *
    * Language: PHP 5.6.35.
    *
    * Interprete: Apache 2.4.2 (WampServer Version 3.1.3).
    *
    * Autor:  Mario Alfonso Peña Viera.
    *
    * Date:03.03.2019.     
    *

    //=====================Programa Principal==================================

    //=========================================================================

******************************************************************************/

?>

<!DOCTYPE html>
<html>
<head>
  <!-- <meta charset="utf-8"><meta http-equiv="refresh" content="3"> -->
	<title> INICIO_DE_SESISION/REGISTRO </title>
  <link rel="stylesheet" type="text/css" href="index_estilos.css">
</head>
<body>
	
<center><h3>Fecha <?php $data_inicial =  date('d-m-y'); echo $data_inicial; ?></h3></center>
<hr>

<p>&nbsp;</p>
<div class="login-wrap">
	<div class="login-html">

		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">SIGN IN</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">SIGN UP</label>
		<div class="login-form">


                   <!--FORMULARIO DE INICIO DE SESIÓN-->
          <div id="error"></div>

		  <form method="post" action="script_acceso_usuario.php">
			<div class="sign-in-htm">
				<div class="group">

					<label for="user" class="label">Username</label>
                    <input id="user" type="text" class="input" name="username">                                                                 
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check"><!--checked-->
					<label for="check"><span class="icon"></span>Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign in">
				</form>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">¿Forgot Password?</a>
				</div>
			</div>
          </form>

            <!--FORMULARIO PARA EL REGISTRO DE LOS USUARIOS-->

          <form method="post" action="Procesamiento_registro.php">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="username">
				</div>
                <div class="group">
					<label for="email" class="label">Email Addrees</label>
					<input id="email" type="email" class="input" name="email">
				</div>
                <div class="group">
					<label for="pass" class="label">Date</label>
					<input id="pass" type="date" class="input" name="date">
				</div>
				
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<!--<div class="group">
					<label for="pass" class="label">Repeat password</label>
					<input id="pass" type="password" class="input" data-type="password" name="contraseña2">
				</div>-->
				<div class="group">
					<input type="submit" class="button" value="Sign up">
				</div>

				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">¿Already Member?</a>
				</div>
			</div>
		  </form>

		</div>
	</div>
</div>