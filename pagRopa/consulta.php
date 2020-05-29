<HEAD>
    <META HTTP-EQUIV="content-Type" CONTENT="text/html;
    CHARSET=utf-8"/>
    <TITLE> Formulario de consulta de venta de Ropa</TITLE>
    <LINK HREF="../estilo/estlosepecialida.css" rel="stylesheet"
    TYPE="text/css"/>
    </HEAD>
    
    <BODY>
    <FORM ID="form1" NAME="form1" METHOD="post"
    ACTION="gestion Ropa.php">
    <P CLASS="titulo"> Selecciona el Grado</P>
    <BR/><BR>
    <LABEL FOR="grupo">Grado:</LABEL>
    <SELECT NAME="nomCorreo" ID="cveCorreo">
    <?php
    include "conectar.php";
    $resConectar=conecta();
    $sqlGroup="SELECT * FROM Grupo;
    $tablaGroup = mysql_query($sqlGroup);
    $numfilasGroup = mysql_num_rows($tablaGroup);
    for (Si=0; $i<$numfilasGroup; $i++)
    {
    $filaGroup = mysq_fetch_array($tablaGroup);
    echo '<option>'.$filaGroup['nomCorreo'].'</option>';
    }
    ?>
 </SELECT> <BR /><BR/>
<INPUT TYPE="submit" NAME="btnConsultar"
ID="botonConsultar VALUE="Consultar /> <BR /><BR />
<a href="index.html"> <img SRC="../imgRopa/rops.jpg"
WIDTH="229" HEIGHT="180"/></a>
</BODY>