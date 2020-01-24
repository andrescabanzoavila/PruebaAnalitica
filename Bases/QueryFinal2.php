<?php

include ("../Css/estilo.html"); 
include ("../header.php"); 
include ("../conexion.php"); 







$sql = "SELECT Tipo, COUNT(*) FROM Registros3 GROUP BY Tipo";
$result = $conn->query($sql);  
?>

<div id="reporte" style="width:80%; margin:0 auto;padding-top: 5%;padding-bottom: 15%">


<h2>Listado de informacion Por descripcion y cantidad 
</h2>
    
<br>


  <br>
  <br>

  <table class="table table-hover">

<thead>

<tr>
<td>Tipo de Archivos</td>
<td>Cantidad</td>
</tr>

  </thead>
<?php 


if ($result->num_rows > 0) { 
while ($row = mysqli_fetch_row($result)){ 
?>


    
<form method='post' id='userform' action=''> <tr>

     
  
   <tr> 
  <td style="width: 100px"><?php echo $row[0];?></td>
  <td style="width: 100px"><?php echo $row[1];?></td>

</tr>




   
<?php
     }

} 

?>
</table>
 


<br>

</form>







</div>
<?
include ("../footer.php"); 
?>