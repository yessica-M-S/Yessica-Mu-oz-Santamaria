<HTML XMLNS="http://www.w3.org/1999/xhtml">
<head>
    <META HTTP-EQUIV="content-Type"CONTENT="text/html;
    charset=Utf-8"/>
    <TITLE>Formulrios de venta de ropa</TITLE>
<link rel="stylesheet" href="../estilo/EstilosRopa.css" Type="text/css"/>
</head>
<body> 
    <form id="form1" name="form1" method="post"
    action="actBase.php">
    <p class="titulo">Altas de Ropa</p>
    <br></br>
    <label for="correp">Correo:</label>
   <input name="cveCorreo" Type="text" id="correoCliente" size="200px" maxlength="6"/> 
<label for="nombre">Nombre:</label>
<input name="nombCliente" type="text" id="nombreCliente" size="100" maxlength="25"/>
<label for="comentario">Comentario:</label>
<input name="comentarioClie" type="text" id="comentariocliente" size="100" maxlength="25"/><br/>
<label for="grado">Gradogroup</label>
<select name="selecGroup" id="selecGroup">
 <?php
 include "conectar.php";
    $resconecta=coneta();
    $sqlGrado="SELECT *FORM Grado";
    $tablaGrados=mysql_query($sqlGrados);
    $numGrado=mysql_num_rows($tablaGrado);
for(si=0: Si<SnumfilasGrados Si++){
    $filaGrado=mysql_fetch_array($tablaGrado);
    echo'<OPTION>'.$filaGrado['NomGrado'].'</OPTION>';
}
?>
<select><br/>
   
<input type="submit" name="boton"
id="botonGuarda" value="guardar"/>
<input type="reset" name="botonnuevo"
id="botonnuevo" value="nuevo"/></br>
</form>
<img  class="foto1" src="../imgRopa/regresa.png"   onclick="history.back()"/>
</body>
</html>