<?php

/******************************************************************************
    *
    * Filename: Login.php
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

require("Validacion_sesion.php");
//.*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*.
// Aca se vuelve a buscar al usuario logeado a través del ID para obtener otros datos de la BD (ESPECIFICAMENTE EL Email Y COLOCARLO EN UNA NUEVA VARIABLE DE SESIÓN)
$id_usuario= $_SESSION['id_usuario'];
$sql="SELECT Email FROM usuarios WHERE id='$id_usuario'";
$resultado=mysqli_query($idcone,$sql) or die(mysqli_error());
$resultado_obtenido=mysqli_fetch_array($resultado);
$email= $resultado_obtenido['Email'];
mysqli_close($idcone);	
//.*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*.
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenido <?php echo $_SESSION['nombre'];?></title>
</head>
<body>

<center><h3>Fecha <?php $data_inicial = date('d-m-y');  echo $data_inicial; ?> </h3></center>

<hr>
<p>&nbsp;</p>

<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right">Usuario: <?php echo $_SESSION['nombre'];//comentario:Aca se usa la variable de sesion(nombre) llenada anteriormente?></td>
  </tr>
  <tr>
    <td align="right"><a href="Desconectar_usuario.php">cerrar sesi&oacute;n</a></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><h3>P&Aacute;GINA DE USUARIO</h3></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <br>
    <td align="center">Su Correo es:<?php echo $email;?></td><!--pa&iacute;s-->
  </tr>
 <!--<tr>
    <td align="center"><a href="Validacion_sesion.php">PAGINA 2</a> </td>
  </tr>-->

  </table>


</body>
</html>