<?php

    $url = "http://andybus5000.totalh.net/coordenadas.json";
    $json = file_get_contents($url);
    $obj = json_decode($json);

    var_dump($obj);
	
	?>