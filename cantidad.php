<?
include ("Css/estilo.html"); 
include ("header.php"); 
include ("conexion.php"); 


$parametro=($_POST['array']);




$sql = "SELECT count(ID) from Registros where ID in ($parametro) ";
$result = $conn->query($sql);  
?>
  
<body onload="document.consultamodificar.submit()">

<?php 


while ($row = mysqli_fetch_row($result)){ 
?>


    <div id="contenedorindex" style="width:800px; margin:0 auto;padding-top: 15%;padding-bottom: 15%">
    	  <center><h1>Descripcion de Registros</h1></center>


<form method='post' id='userform' name="consultamodificar" action='consultaModificar.php'> <tr>

     

  <div class="form-group row">
    <div class="col-sm-10">
      Cantidad de registros: <input type="text" class="form-control" id="cantidad"  name="cantidad" value=<?php echo $row[0];?>>
    </div>
  </div>


<div class="form-group row">
    <div class="col-sm-10">
     id's:  <input type="text" class="form-control" id="parametro"  name="parametro" value=<?php echo $parametro?>>
    </div>
  </div>


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="enviar" class="btn btn-primary" style="margin: 0 auto">Confirmar</button>

    </div>
  </div>
</div>


<?php
     }

?>



</form>

</body>

<?
include ("footer.php"); 
?>
