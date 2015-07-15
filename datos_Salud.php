  
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <!--

CODIGO PARA CARGAR LOS DATOS EN EL COMBOBOX

-->
<?php
include "conexion.php";

$sql="SELECT * from SPS_TIPOATENCIONMEDICA";
$result = mysql_query($sql); 

if (mysql_num_rows($result)) 
{
    $radio="";
    while ($row=mysql_fetch_row($result)) 
    {
		$id = strtoupper($row[0]);
		$nombre = strtoupper($row[1]);
        $radio .=" <label name='lbl_SPS_atencion'><input type='radio' name='radio_SPS_atencion' value='".$id."'> ".$nombre."&nbsp;&nbsp;&nbsp;&nbsp; </label>"; 
    }
}
else
{
    echo "No hubo resultados";
}
 
?>
  <title>DATOS SALUD</title>
  </head>
  
  <body>
  <form id="formulario" action="" method="post" name="formulario">
  <blockquote>
  <blockquote>
      <h3 name="lbl_SPS_titulo">4._ DATOS DE SALUD</h3> <br>
      <blockquote>
  <p>
      <label name="lbl_SPS_discapacidad">EL ESTUDIANTE TIENE ALGUNA DISCAPACIDAD:</label><br><br>
      <label name:"lbl_SPS_disSi">
      <input type="radio" name="radio_SPS_Dis" value="Si" onclick="txt_SPS_cualDis.disabled = false">
      SI &nbsp;&nbsp;</label>
      <label name:"lbl_SPS_disNo">
      <input type="radio" name="radio_SPS_Dis" value="No" onclick="txt_SPS_cualDis.disabled = true">
      NO</label>
     <br><br>
    
  </p>
  
  <p>		
      <label name="lbl_SPS_cualDis">DETERMINE C&Uacute;AL: </label><br><br>
      <textarea name="txt_SPS_cualDis" id="txt_SPS_cualDis" cols="80" rows="2" disabled="disabled"></textarea><br><br>
   </p>
   
  <p>		
          <label name="lbl_SPS_carnetConadis">N&Uacute;MERO DEL CARNET DEL CONADIS: &nbsp;&nbsp; </label>
          <input name="txt_SPS_carnet" id="txt_SPS_carnet" type="text"  maxlength="10" /><br><br>
  </p>	
  
  <p>
          <label name="lbl_SPS_condicionMedica">EL ESTUDIANTE TIENE ALGUNA CONDICI&Oacute;N M&Eacute;DICA ESPEC&Iacute;FICA: 		</label><br><br>
          <label name="lbl_SPS_conMedicaSi"><input type="radio" name="radio_SPS_conMedica" value="Si" onclick= "txt_SPS_condicion.disabled = false" > SI &nbsp;&nbsp; </label>
          <label name="lbl_SPS_conMedicaNo"><input type="radio" name="radio_SPS_conMedica" value="No" onclick="txt_SPS_condicion.disabled = true">  NO </label><br><br>
    </p>
   
   <p>		
          <label name="lbl_SPS_Condicion">DETERMINE C&Uacute;AL: </label><br><br>
           <textarea name="txt_SPS_condicion" id="txt_SPS_condicion" cols="80" rows="2" disabled="disabled" value=""></textarea><br><br>
    </p>
      
      <p>      
          <label name="lbl_SPS_alergia">EL ESTUDIANTE PADECE DE ALERGIA: </label><br><br>
           <label name="lbl_SPS_alergiaSi"><input type="radio" name="radio_SPS_alergia" value="Si" onclick="txt_SPS_alergia.disabled = false"> SI &nbsp;&nbsp;</label> 
          <label name="lbl_SPS_alergiaNo"><input type="radio" name="radio_SPS_alergia" value="No" onclick="txt_SPS_alergia.disabled = true">  NO </label> <br><br>
      </p>
      
      <p> 	
          <label name="lbl_SPS_pAlergia">DETERMINE C&Uacute;AL: </label><br><br>
           <textarea name="txt_SPS_alergia" id="txt_SPS_alergia" cols="80" rows="2" disabled="disabled"></textarea> <br><br>
       </p> 
      
      <p>  
           <label name="lbl_SPS_medicamentos">ESPECIFICAR MEDICAMENTOS QUE UTILIZA: </label><br><br>
           <textarea name="txt_SPS_medicamentos" id="txt_SPS_medicamentos" cols="80" rows="2" ></textarea><br><br>
       </p> 
          
         <p> 
          <label name="lbl_SPS_atencion">EL ESTUDIANTE RECIBE ATENCI&Oacute;N M&Eacute;DICA EN: </label><br><br>
            <?php echo $radio; ?>  <br><br>
         </p> 
          
           <p>
          <label name="lbl_SPS_nombreMedico">NOMBRE DEL M&Eacute;DICO: &nbsp;&nbsp; </label>
          <input name="txt_SPS_nombreMedico" id="txt_SPS_nombreMedico" type="text"  size="50" maxlength="50" />
          <br><br>
           </p>
          
           <p>
          <label name="lbl_SPS_telefonoMedico">TEL&Eacute;FONO DEL M&Eacute;DICO: &nbsp;&nbsp; </label>
          <input name="txt_SPS_telefonoMedico" id="txt_SPS_telefonoMedico" type="text"  maxlength="10" />
          <br><br>
          </p>
          
           <p>
          <label name="lbl_SPS_lugarTrabajoDoctor">LUGAR DE TRABAJO DEL M&Eacute;DICO: &nbsp;&nbsp; </label>
          <input name="txt_SPS_lugarTrabajoDoctor" id="txt_SPS_lugarTrabajoDoctor" type="text"  size="50" maxlength="50" />
          <br><br>
           </p>
           
          
      
  </blockquote>
  </blockquote>
  </blockquote>
  <footer >
   <center> <input name="btn_SPS_siguiente" id="btn_SPS_siguiente" type="button" value="SIGUIENTE" onClick = "location='datos_Academicos.php'" /></center>
    
  </footer>
  </form>
  </body>
  </html>
    