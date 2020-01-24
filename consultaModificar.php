<?php  
include ("Css/estilo.html"); 
include ("header.php"); 
include ("conexion.php"); 



$cantidad=($_POST['cantidad']);
$parametro = $_POST['parametro'];




?>
<div  style="padding-left: 5% !important;padding-bottom: 10% !important">
<h2>Insercion de datos</h2>
  <table class="table table-hover">

<?php
$cantidad = $_POST['cantidad'];
 if($cantidad>0){ ?>
<br /><br />
<form method="POST" >

    <thead>
 
<tr>
<td></td>
<td>ID</td>
<td>Fecha</td>
<td>Descripcion</td>
<td>Tipo de Archivo</td>

</tr>
</thead>


<?

   $sql = "SELECT * FROM Registros"; //aca es $parametro
    $result = $conn->query($sql);  
     $cantidad=1;
 While($cantidad<=$_POST['cantidad']){

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {


  ?>

  <tr>
    <td><?php echo "$cantidad"; ?></td>

    <td><input type="text" name="id<?php echo "$cantidad";?>" value=<?php echo $row["id"];?> required="required"></td>

    <td><input type="text" name="fecha<?php echo "$cantidad";?>" value=<?php echo $row["fecha"];?> required="required"></td>

    <td><input type="text" name="descripcion<?php echo "$cantidad";?>" value=<?php echo $row["descripcion"];?> required="required"></td>

    <td><input type="text" name="tipoarchivo<?php echo "$cantidad";?>" value=<?php echo $row["tipoarchivo"];?> required="required"></td>

   

 <input name="num<?php echo "$cantidad"; ?>" type="hidden">
 <input name="cantidad" type="hidden" id="cantidad" value="<?php echo "$_POST[cantidad]"; ?>" />
<?php

$cantidad++;
}
    }

}

?>

  </tr>

  </table>

  <tr>
  

     <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="guardar" class="btn btn-primary" style="margin: 0 auto">Guardar</button>

    </div>
  </div>
<?php } ?>  

  </tr>
</form>
<?
if(isset($_POST['guardar']))

        {
for($x =0 ; $x <= $_POST['cantidad'] ; $x++)
if(isset($_POST["num" . $x])) {




 $id=                         $_POST["id".$x ];
 $fecha=                      $_POST["fecha".$x ];
 $descripcion=                $_POST["descripcion".$x ];
 $tipoarchivo=                $_POST["tipoarchivo".$x ];


$consulta2 = "INSERT INTO 
Registros 
(
id,
fecha,
descripcion,
tipoarchivo
 )
VALUES
 (
'$id',
'$fecha',
'$descripcion',
'$tipoarchivo')";
$resultado = $conn->query($consulta2);

if ($resultado === TRUE) {

$consulta3 = "INSERT INTO 
Registros2
(
id,
descripcion
 )
VALUES
 (
'$id',
'$descripcion')";
$resultado3 = $conn->query($consulta3);

}

if ($resultado3 === TRUE) {

	$consulta4 = "INSERT INTO 
Registros3
(
id,
Tipo
 )
VALUES
 (
'$id',
'$Tipo')";
$resultado4 = $conn->query($consulta4);


}

}

echo ("<script language='JavaScript'>
         window.location.href='index.php'; 
         window.alert('se han insertado los registros')
       </script>");

}
else {
    echo "Error: " . $consulta2 . "<br>" . $conn->error;
}

?>

</div>
<?
include ("footer.php"); 
?>