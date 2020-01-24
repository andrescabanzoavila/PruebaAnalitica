<?php

$Tipo = "FechaInicial";
$Expresion ="2019-07-01 00:00:00";

include 'nusoap-0.9.5/lib/nusoap.php';

$wsdl ="localhost/PruebaAnalitica/ServiciosAZDigital.wsdl";

$client =new nusoap_client ($wsdl,'wsdl');

$param=array('Tipo'=>$Tipo,'Expresion'=>$Expresion);


$respuesta = $client->call('BuscarArchivo',$param);

print_r($respuesta);

?>