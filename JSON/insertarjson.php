<?php
include ("../header.php"); 
include ("../Css/estilo.html"); 
include ("../conexion.php");
?>

<html>  
      <head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <style>
   
  
  </style>
      </head>  
      <body>  
        <div class="container box">


          <?php
          $filename = "archivos.json";
          $data = file_get_contents($filename); //Read the JSON file in PHP
          $array = json_decode($data, true); //Convert JSON String into PHP Array
          foreach($array as $row) //Extract the Array Values by using Foreach Loop
          {
           $query .= 
           "INSERT INTO Registros(fecha, descripcion, tipoarchivo) VALUES ('".$row["fecha"]."', '".$row["descripcion"]."', '".$row["tipoarchivo"]."');INSERT INTO Registros2(descripcion) VALUES ( '".$row["descripcion"]."');INSERT INTO Registros3(Tipo) VALUES ( '".$row["tipoarchivo"]."'); ";  // Make Multiple Insert Query 
      
          }
          if(mysqli_multi_query($conn, $query)) //Run Mutliple Insert Query
    {
     echo 'Registros insertados a las tablas';
          }




          ?>
     <br />
         </div>  
      </body>  
 </html>  

 <?php
include ("../footer.php"); 
?>