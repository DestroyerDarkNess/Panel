<?php

/******************************************************************************
    *
    * Filename: Validacion_sesion.php
    *
    * Propósito:
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

//Proceso de conexión con la base de datos
	require("conex.php");
	$idcone = conexion();

//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión incorrectamente se envia al login
if (!$_SESSION){
	header("location:Login.php");	
}
//Validar si la cookie está activa
 if(isset($_COOKIE['login'])){ 
	// Cookie creada y activa
}else{ 
	//cookie destruida, cierra la sesion y manda al login
	session_destroy();
	echo "<center><h2>La sesión agotó el tiempo de vida</h2><br>";
	echo "<a href=login.php>Ir al login </a></center>";
	exit;// Salimos corriendo (evita que se siga ejecutan do los códigos siguiente).
} 
	
?>