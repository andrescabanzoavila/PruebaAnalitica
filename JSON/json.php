<?php

require "php-json-file-decode/json-file-decode.class.php";

$archivos = array ("archivos" => array(

array (

"fecha" => "2019-07-01 00:00:00",
"descripcion" => "Viene de Json Tipo Xml",
"tipoarchivo" => "Xml",
),

array (

"fecha" => "2019-07-01 00:00:00",
"descripcion" => "Viene de Json Tipo PDF 3",
"tipoarchivo" => "PDF",
),

array (

"fecha" => "2019-07-01 00:00:00",
"descripcion" => "Viene de Json Tipo Xml3",
"tipoarchivo" => "Xml",
),


));

$json_archivos = json_encode($archivos);
//var_dump($json_alumnos);

//crear el archivo JSON

$handler = fopen("archivos.json", "w+");
fwrite($handler, $json_archivos);
fclose($handler);


$read = new json_file_decode();
$json = $read -> json("archivos.json");

// acceder al nombre del primer alumno

echo "primer archivo ".$json["archivos"][0]["fecha"];

//indexar todos los alumnos
?>

<form name='enviarjson' action='insertarjson.php' method='get'>

<?
for ($x=0; $x<count($json["archivos"]); $x++){

echo "<tr>";
echo "
<td><input type='text' name='fecha' value='".$json["archivos"][$x]["fecha"]."'</input></td>
<td><input type='text' name='descripcion' value='".$json["archivos"][$x]["descripcion"]."'</input></td>
<td><input type='text' name='tipoarchivo' value='".$json["archivos"][$x]["tipoarchivo"]."'</input></td>";

echo("<br><br></tr>");
}

?>



<input type='submit' name='enviar' value='enviar'>
</form>
