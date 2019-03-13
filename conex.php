<?php
/******************************************************************************
    *
    * Filename: conex.php
    *
    * Propósito: Creando conexiones entre el servidor y nuestra base de datos.
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
//ejemplo de conexión mysqli
function conexion(){
	$servidor="localhost";
	$usuario="root";
	$clave="";//
	$basededatos="data_base";//Nombre de nuestra base de datos
	$idcone=mysqli_connect($servidor,$usuario,$clave,$basededatos) or die("Error al conectar al Servidor");
	$idcone->set_charset("utf8");//-->esto hace que mysqli muestre los acentos y las ñ es decir los caracteres especiale.
	return $idcone;
}
?>