<?php
include ("../header.php"); 
include ("../Css/estilo.html"); 
?>
<div id="contenedorindex" style="width:800px; margin:0 auto;padding-top: 15%;padding-bottom: 15%">
  <center><h1>Realizar Insercion</h1></center>
<form action="insertarjson.php" method="get">
 
<div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="enviar" class="btn btn-primary" style="margin: 0 auto">Ejecutar</button>

    </div>
  </div>
</form>
</div>
  <?
include ("../footer.php"); 
?>