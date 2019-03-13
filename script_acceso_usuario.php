<?php
/******************************************************************************
    *
    * Filename: script_acceso_usuario.php
    *
    * Propósito: 
    *
    * Language: PHP 5.6.35.
    *
    * Interprete: Apache 2.4.2 (WampServer Version 3.1.3).
    *
    * Autor:  Mario Alfonso Peña Viera.
    *
    * Date:2.03.2019.     
    *

    //=====================Programa Principal==================================

    //=========================================================================

******************************************************************************/

//1. Recibimos los datos enviados desde el formulario
$username=$_POST['username'];
$password=$_POST['password'];

//2. Si las variables $username, $password está llena isset=True entonces
if(isset($username) && isset($password)){
 
//3. Proceso de conexión con la base de datos
	require("conex.php");
	$conex = conexion();
	
	//4. Consultar si los datos son están guardados en la base de datos
	//Seleccionar todos los datos de la tabla usuarios donde Username='$username' y Password='$password'.
	$consulta= "SELECT * FROM usuarios WHERE Username='$username' AND Password='$password'"; 

	//5. Aplico el query
	//Almacenando la conexion y la consulta en la variable "$resultado" en caso de que ocurra un error durarte la conexion o en la consulta mostrar un error al usuario "or die (mysqli_error())".

	$resultado= mysqli_query($conex,$consulta) or die (mysqli_error());
	//6. Convertir resultados en arreglo

	$fila=mysqli_fetch_array($resultado);//Coloco el resultado en el arreglo fila para la manipulacion de los campos y registros de la tabla "usuarios".
	
	//OPCIÓN 1: Si el usuario NO existe o los datos son INCORRRECTOS.
	if (!$fila['id']){ //Si NO hay nada en el campo id del arreglo llamado fila
		header("location:Login.php");	
	}
	else{//OPCIÓN 2: Usuario logueado correctamente
	//Inicio de variables de sesión
	session_start();

	//Definimos las variables de sesión y redirigimos a la página de usuario
		$_SESSION['id_usuario'] = $fila['id'];
		$_SESSION['nombre'] = $fila['Username'];
		
		//-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.-.-.-.-.-.-.-.-.-.-.-.
		//-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.-.-.-.-.-.-.-.-.-.-.-.
		//CREAR COOKIE PARA CONTROLAR EL TIEMPO DE LA SESIÓN
		if(isset($_COOKIE['login'])){//Si existe -> no pasa nada (se pudo negar la instruccion con !){ 
			//Cookie creada
		}else{//si no existe 
			//Creamos la COOKIE con el tiempo de duración, en este ejemplo 60seg = 1 minuto
			setcookie('login', 1, time() + 60); 
		} 
		//-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.-.-.-.-.-.-.-.-.-.-.-.
		//-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.-.-.-.-.-.-.-.-.-.-.-.	
		header("Location:Pagina_usuario.php");//-->Se va hacia la página deseada
	}
	mysqli_close($idcone);	
}
else{//Si la variable $email está vacia isset=false entonces se envia al login
	header("location:Login.php");// envío al login
}

?>