<?php

$latitud = $_GET['lati'];	//obtenemos la latitud por URL

$longitud = $_GET['longi'];	//obtenemos la longitud por URL
 

$coordenadas = array('latitud'=> $latitud, 'longitud'=> $longitud);	//Creamos el array


//Creamos el JSON
$json_string = json_encode($coordenadas);
$file = 'coordenadas.json';
file_put_contents($file, $json_string);


?>