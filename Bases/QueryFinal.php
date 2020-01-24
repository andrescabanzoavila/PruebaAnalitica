<?php

include ("../Css/estilo.html"); 
include ("../header.php"); 
include ("../conexion.php"); 







$sql = "SELECT * FROM Registros2 INNER JOIN Registros3 ON Registros2.id = Registros3.id ";
$result = $conn->query($sql);  
?>

<div id="reporte" style="width:80%; margin:0 auto;padding-top: 5%;padding-bottom: 15%">


<h2>Listado de informacion de las dos tablas
</h2>
    
<br>


  <br>
  <br>

  <table class="table table-hover">

<thead>
  <tr>
  <td colspan="2">Tabla1</td>

  <td colspan="2">Tabla2</td>
  <tr>
<tr>
<td>ID</td>
<td>Descripcion</td>
<td>ID</td>
<td>Tipo</td>
</tr>

  </thead>
<?php 


if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
?>


    
<form method='post' id='userform' action=''> <tr>

     
  
   <tr> 
  <td style="width: 100px"><?php echo $row["id"];?></td>
  <td style="width: 100px"><?php echo $row["descripcion"];?></td>
  <td style="width: 100px"><?php echo $row["id"];?></td>
  <td style="width: 150px"><?php echo $row["Tipo"];?></td>





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