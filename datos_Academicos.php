<!doctype html>

<html>
<head>
<meta charset="utf-8">

<!--

CODIGO PARA CARGAR LOS DATOS EN EL COMBOBOX

-->
<?php
include "conexion.php";

$sql="SELECT * from sa_materia";
$result = mysql_query($sql); 

if (mysql_num_rows($result)) 
{
    $combobit="";
    while ($row=mysql_fetch_row($result)) 
    {
		$id = strtoupper($row[0]);
		$nombre = strtoupper($row[1]);
        $combobit .=" <option value='".$id."'>".$nombre."</option>"; 
    }
}
else
{
    echo "No hubo resultados";
}
 
?>


<!--

FUNCIONES 
-->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
	var selected1="";
	var selected2="";
	function ShowSelected()
{

        
var combo = document.getElementById("cb_SPS_asignPreferencia");
var selected = combo.options[combo.selectedIndex].text;
selected1=selected.concat("   ",selected1);
document.formulario1.lbl_SPS_asigPreferencia.value=selected1;
}

function ShowSelected1()
{


var combo1 = document.getElementById("cb_SPS_asignDificultad");
var selected3 = combo1.options[combo1.selectedIndex].text;
selected2=selected3.concat("   ",selected2);
document.formulario1.lbl_SPS_asigDificultad.value=selected2;
}
	</script>
    
    
    
    <!--

TODO EL CODIGO DE HTML

-->
<title>DATOS ACAD&Eacute;MICOS</title>
</head>

<body>
<form id="formulario1" action="" method="post" name="formulario1">
  <blockquote>
  <blockquote>
      <h3 name="lbl_SPS_titulo2">5.1._ DATOS ACAD&Eacute;MICOS</h3> <br>
      <blockquote>
  <p>
      <label name="lbl_SPS_Preferencia">ASIGNATURAS DE PREFERENCIA DEL ESTUDIANTE:</label><br><br>
      <select name="cb_SPS_asignPreferencia" id="cb_SPS_asignPreferencia" onchange="ShowSelected()" >
      <option ></option>
        <?php echo $combobit; ?>
      </select>&nbsp;&nbsp; &nbsp;&nbsp;
     <input name="lbl_SPS_asigPreferencia"   id="lbl_SPS_asigPreferencia" type="text"  size="60"/><br><br>
      
    
  </p>
  
  <p>
      <label name="lbl_SPS_Dificultad">ASIGNATURAS EN LAS QUE HA TENIDO DIFICULTAD:</label><br><br>
      <select name="cb_SPS_asignDificultad" id="cb_SPS_asignDificultad" onchange="ShowSelected1()" >
        <option  ></option>
        <?php echo $combobit; ?>
      </select>&nbsp;&nbsp; &nbsp;&nbsp;
     <input name="lbl_SPS_asigDificultad"  id="lbl_SPS_asigDificultad" type="text"  size="60"/><br><br>
      
    
  </p>
  
  <p>  
           <label name="lbl_SPS_dignidad">DIGNIDAD ALCANZADA: </label><br><br>
          <textarea name="txt_SPS_dignidad" id="txt_SPS_dignidad" cols="80" rows="2" ></textarea><br><br>
       </p> 
       
       <p>  
           <label name="lbl_SPS_logrosAcademicos">LOGROS ACAD&Eacute;MICOS: </label><br><br>
          <textarea name="txt_SPS_logrosAcademicos" id="txt_SPS_logrosAcademicos" cols="80" rows="2" ></textarea><br><br>
       </p>
       
           <label name="lbl_SPS_participacion">PARTICIPACI&Oacute;N EN: </label><br><br>
        <textarea name="txt_SPS_participacion" id="txt_SPS_participacion" cols="80" rows="2" ></textarea><br><br>
       </p>
       
       </p>
       
           <label name="lbl_SPS_club">CLUBES: </label><br><br>
        <textarea name="txt_SPS_club" id="txt_SPS_club" cols="80" rows="2" ></textarea><br><br>
       </p>
       
       </p>
       
           <label name="lbl_SPS_extracurriculares">EXTRACURRICULARES: </label><br><br>
        <textarea name="txt_SPS_extracurriculares" id="txt_SPS_extracurriculares" cols="80" rows="2" ></textarea><br><br>
       </p>
       
      
  </blockquote>
  </blockquote>
  </blockquote>
  <footer >

   <center>
     <input name="btn_SPS_atrasAcademico" id="btn_SPS_atrasAcademico" type="button" value="ATRAS" onClick = "history.back()" /> 
     <input name="btn_SPS_siguienteAcademico" id="btn_SPS_siguienteAcademico" type="button" value="SIGUIENTE" /></center>

  </footer>
  </form>
</body>
</html>