<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
echo date("l/m/y h:i")."<br>";

$fecha_actual= date("l/m/y h:i");
echo "la fecha actual es: ".$fecha_actual;



$hora_actual= time();
echo("<h3>". $hora_actual ."</h3>");

$hora_actual2=getdate(time());
echo("<h3>". $hora_actual2['hours']. ":" . $hora_actual2['minutes']."</h3>");