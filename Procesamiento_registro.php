<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Registro</title>
<body>

<?php
/******************************************************************************
    *
    * Filename: Procesamiento_registro.php
    *
    * Propósito: Insertar Nuevo Usuarios En La Tabla "usuarios" De Nestra Base De Datos Llamada (data_base).
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
error_reporting(E_ALL);
ini_set('display_errors','1');

require("conex.php");
$idcone= conexion();

//Recibimos datos enviados desde el formulario.

$username=$_POST['username'];
$email=$_POST['email'];
$date=$_POST['date'];
$password=$_POST['password'];

//Insertando datos en la tabla (usuarios) de nuestra base de datos llamada data_base.

$sql="INSERT INTO usuarios (Username,Email,Date,Password) VALUES ('$username','$email','$date','$password')";

  if(mysqli_query($idcone,$sql)){

        header("location:Login.php");
        // echo "<h1> <i> <center> Registro exitoso!  </center> </i> </h1>";

  }else{
     
        echo "<h1> <i> <center> Verifique sus datos!  </center> </i> </h1>";

  }

  mysqli_close($idcone); 

?>
<!---->
<style type="text/css">

body{
  margin:0;
  /*background:#c8c8c8;color:#6a6f8c;*/
  color:#00DD00;
  background:#2D2D30;
  
  font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}


h1{

  position: relative;
  top: 200px;
}
</style>

</body>
</html>
