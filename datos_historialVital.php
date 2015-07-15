<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Historial Vital</title>
<?php
      include "conexion.php";
?>	  
</head>

<body>
<form id="form1" name="form1" method="post">
<blockquote>
<blockquote>
  <h3>6.5_ COMO DESCRIBIR&Iacute;A LA RELACI&Oacute;N DEL/LA ESTUDIANTE:</h3>
  <blockquote>
  <p>
    <label for="lbl_SPS_relPadre">PADRE:<br>
      <br>
    </label>
    <textarea name="txt_SPS_relPadre" cols="100" rows="3" id="txt_SPS_relPadre"></textarea>
    <br>
  </p>
  <p>
    <label for="lbl_SPS_relMadre">MADRE:<br>
      <br>
    </label>
    <textarea name="txt_SPS_relMadre" cols="100" rows="3" id="txt_SPS_relMadre"></textarea>
  </p>
  <p>
    <label for="lbl_SPS_relHermanos">HERMANOS:</label>
  </p>
  <p>
    <textarea name="txt_SPS_relHermanos" cols="100" rows="3" id="txt_SPS_relHermanos"></textarea>
  </p>
  <p>
    <label for="lbl_SPS_relOtros">OTROS:<br>
    </label>
    <textarea name="txt_SPS_relOtros" cols="100" rows="3" id="txt_SPS_relOtros"></textarea>
  </p>
  <p>OBSERVACIONES
    <label for="lbl_SPS_relObs">:<br>
      <br>
    </label>
    <textarea name="txt_SPS_relObs" cols="100" rows="3" id="txt_SPS_relObs"></textarea>
  </p> 
  </blockquote>
  </blockquote>
  <blockquote>
  <h3>6.6_ COSTUMBRES y H&Aacute;BITOS</h3>
  <blockquote>
  <p>H&Aacute;BITOS DE SUEÑO
    <label for="lbl_SPS_habSueno">:<br>
      <br>
    </label>
    <textarea name="lbl_SPS_habSueno" cols="100" rows="3" id="lbl_SPS_habSueno"></textarea>
  </p>
  <p>
    <label for="lbl_SPS_habAlim">H&Aacute;BITOS DE ALIMENTICIOS
      :<br>
      <br>
    </label>
    <textarea name="txt_SPS_habAlim" cols="100" rows="3" id="txt_SPS_habAlim"></textarea>
    <br>
  </p>
  <p>
    <label for="lbl_SPS_actTiemLibre">ACTIVIDADES TIEMPO LIBRE:<br>
      <br>
    </label>
    <textarea name="txt_SPS_actTiemLibre" cols="100" rows="3" id="txt_SPS_actTiemLibre"></textarea>
  </p>
  <p>
    <label for="lbl_SPS_tareasTL"> CU&Aacute;NTAS TAREAS TIENE DIARIAMENTE:<br>
      <br>
    </label>
    <textarea name="txt_SPS_tareasTL" cols="100" rows="3" id="txt_SPS_tareasTL"></textarea>
  </p>
  <p>
    <label for="lbl_SPS_tiemTar">TIEMPO QUE DEDICA A LAS TAREAS:<br>
      <br>
    </label>
    <textarea name="txt_SPS_tiemTar" cols="100" rows="3" id="txt_SPS_tiemTar"></textarea>
  </p>
  <footer><center> 
  <input name="btn_SPS_guardar" id="btn_SPS_guardar" type="button" value="GUARDAR">
  </center> 
  </footer></blockquote>
  </blockquote>
  </blockquote>
</form>
</body>
</html>