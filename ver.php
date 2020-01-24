
<?php

include ("Css/estilo.html"); 
include ("header.php"); 
include ("conexion.php"); 




$fecha=($_GET['fecha']);



?>

<script type="text/javascript">
  
  
  $(document).ready(function () {
  $('body').on('click', '#selectAll', function () {
    if ($(this).hasClass('allChecked')) {
        $('input[type="checkbox"]', '#nits').prop('checked', false);
    } else {
        $('input[type="checkbox"]', '#nits').prop('checked', true);
    }
    $(this).toggleClass('allChecked');
  })
});
</script>

<div id="reporte" style="width:80%; margin:0 auto;padding-top: 5%;padding-bottom: 15%">


<h2>Listado de archivos por fecha <?echo $fecha?>
</h2>
    
<br>
 <div class="form-group row">
    <div class="col-sm-10">
      <button class="btn btn-primary" style="margin: 0 auto;"><a href="#abajo" style="color: white !important"> ir abajo</a></button>
      

    </div>
  </div>

  <br>
  <br>

  <table class="table table-hover" id="nits">

<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">fecha</th>
      <th scope="col">descripcion</th>
      <th scope="col">tipo archivo</th>
    
      <th scope="col"><div class="form-group row"><div class="col-sm-10"><button type="button" name="selectAll" id="selectAll" class="btn btn-primary" style="margin: 0 auto">Select al</button>
      </div>
      </div>
      </th>
      </tr>
</thead>

 
<?php

 
        $sql = "SELECT * FROM Registros where fecha='$fecha'";
        if ( $result = $conn->query($sql) ){
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {

                  ?>
                  <form method='post' id='userform' action=''> 

 <tr> 
  <td style="width: 100px"><?php echo $row["id"];?></td>
  <td style="width: 100px"><?php echo $row["fecha"];?></td>
  <td style="width: 100px"><?php echo $row["descripcion"];?></td>
  <td style="width: 150px"><?php echo $row["tipoarchivo"];?></td>

  <td style="width: 100px"><input type="checkbox" checked="true" name='checkboxvar[]' value=<?php echo $row["id"];?>>
  </tr>
                    <?
                }
            } 
        } 
        $conn->close();
    
?>

</table>
 <div name="abajo" id="abajo">
 </div>


<br>
 <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="enviar" class="btn btn-primary" style="margin: 0 auto">Confirmar</button>

    </div>
  </div>
</form>




<?php 
if (isset($_POST['checkboxvar'])) 
{
	?>

	<form action="cantidad.php" method="post">

<input type="text" name="array" value=<?echo implode(',', $_POST['checkboxvar']);}?>




<div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="enviar" class="btn btn-primary" style="margin: 0 auto">Contar</button>

    </div>
  </div>
</form>


</div>
<?
include ("footer.php"); 
?>