  
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>DATOS REFERENCIAS FAMILIARES</title>

      <!--

      CODIGO PARA CARGAR LOS DATOS EN EL COMBOBOX

      -->
      <?php
      include "conexion.php";

      $sql="SELECT * FROM sps_estructurafamiliar";
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
  </head>
  
  <body>
  <form id="formulario" action="" method="post" name="formulario">
  <blockquote>
  <blockquote>
      <h3 name="lbl_SPS_titulo">3._ REFERENCIAS FAMILIARES</h3> <br>
      <blockquote>
  <p>
      <label name="lbl_SPS_discapacidad">-PERSONAS CON QUIEN VIVE EL ESTUDIANTE (ESPECIFICAR TODAS LAS PERSONAS QUE CONFORMAN LA ESTUCTURA FAMILIAR):</label>
      <br><br>
      <textarea name="txt_SPS_viveEstudiante" id="txt_SPS_viveEstudiante" cols="125" rows="5"></textarea>
      <label name:"lbl_SPS_disSi">&nbsp;&nbsp;</label><br>
    
  </p>
  
  <p>-DESCRIPCION DE LA ESTRUCTURA FAMILIAR:</p>
  <p>
    <label for="cb_SPS_estrucFamiliar">SELECCIONE UNO: </label>
    <select name="cb_SPS_estrucFamiliar" id="cb_SPS_estrucFamiliar">
        <?php echo $combobit; ?>
    </select>
    </p>
  <p>-VIVE CON (SELECCIONES TODOS LOS QUE APLIQUE):</p>
  <p> 
    
    PADRE
      <input type="checkbox" name="chb_viveConPadre" id="chb_viveConPadre">
      
    MADRE
    <label for="chb_viveConMadre"></label>
    <label for="chb_conDiscapacidad"></label>
    <label for="tf_SPS_viveConOtros">
      <input type="checkbox" name="chb_viveConMadre" id="chb_viveConMadre">
      OTRO:</label>
    <input type="text" name="tf_SPS_viveConOtros" id="tf_SPS_viveConOtros">
    </p>
  <p>-FAMILIARES CON ALGUN TIPO DE DISCAPACIDAD:</p>
  <p>SI
    <input type="checkbox" name="chb_conDiscapacidad" id="chb_conDiscapacidad">
  </p>
  <p>DETERMINAR QUIEN 
    <input type="text" name="tf_SPS_quienDiscapacidad" id="tf_SPS_quienDiscapacidad">
  </p>
  <p>OBSERVACIONES 
    <input type="text" name="tf_SPS_discapacidadDescripcion" id="tf_SPS_discapacidadDescripcion">
  </p>
  <p>&nbsp;</p>
  <p><br>
    <br>
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
    