<?php
include ("header.php"); 
include ("Css/estilo.html"); 
?>
<div id="contenedorindex" style="width:800px; margin:0 auto;padding-top: 15%;padding-bottom: 15%">
  <center><h1>Consulta la Fecha</h1></center>
<form action="ver.php" method="get">
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fecha"  name="fecha" placeholder="2019-07-01 00:00:00">
    </div>
  </div>
<div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="enviar" class="btn btn-primary" style="margin: 0 auto">Consultar</button>

    </div>
  </div>
</form>
</div>
  <?
include ("footer.php"); 
?>