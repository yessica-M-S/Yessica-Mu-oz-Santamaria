<?php
include "conectar.php";
$CvCorreo-$_POST['cvCorreo'];
$vNomClie=$_POST['nomCliente'];
$vNomComen=$_POST['comentarioClie'];
$NomGroup=$_Post['nomGroup']
$VBoton=$_POST['boton'];
$resconectar=conecta();
$sqlnomGroup="SELECT cveGroup FROM Grado
WHERE nomGroup='$NomGroup';";
$sqlCveGroup=mysql_query($sqlArea,$resConectar);
$resulCveGroup= mysqlfetch_array($sqlnomGroup);
$sqlCveGroup=$resulCveGroup["cveArea"];

 if ($vBoton=="Guardar"{
$sqlAltaEsp="INSERT INTO Grupo 
VALUES('$CvCorreo','$vNomClie','$vNomComen','$NomGroup');";
$guarda=mysql_query($sqlAltGroup,$resConectar);
if (if $guarda){
echo "<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascrip'>
alert('Ocurrió un error...')
Javascript:history.back(1)
</SCRIPT>;
else{
echo "<SCRIPT LANGUAGE='Javascript 'TYPE='text/Javascrip'
alert('Grupo registrado)
window.location='../index.html'
</SCRIPT>;
}
}
else{
$sqlmodGro="UPDATE ESPECIALIDAD
SET nomGroup='$VNomEsp',cveComent='$vNomComen'cveG='$NomGroup'
WHERE cvCoreo ='$CvCorreo';";
$modificar=mysql_query($sqlmodGro, $resConectar);
if ($modificar){
echo "<SCRIPT LANGUAGE="Javascript' TYPE='text/Javascrip'
alert('Ocurrió un error... ')
Javascript:history.back(1)
</SCRIPT>;
else{}
echo "<SCRIPT LANGUAGE="Javascript' TYPE=text/Javascri
alert('modificada`')
window.location='consulta.php'
</SCRIPT>";
}
}
?>