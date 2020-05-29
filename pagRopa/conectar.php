<?php
function conecta(){
$vServidor="localhost";
$vUsuarioBD="root";
$vContraseniaBD="";
$BD="ROPA";
$errorServ="No se puede conectar con el servidor";
$errorBD="No se puede seleccionar la base de datos";
$conexion=mysql_connect ($Servidor", $vUsuarioBD,
$VContraseniaBD) or die ($verrorServ);
mysql_select_db or die ($errorBD);
return ($conexion);