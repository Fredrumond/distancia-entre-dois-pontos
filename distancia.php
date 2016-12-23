<?php

$p1Lat = -19.974449;
$p1Lon = -44.020902;

$p2Lat = -19.974736;
$p2Lon = -44.021554;

//raio da Terra em quilômetros
$n = 6371;
$calculaDistancia = $n * (acos(cos(pi()*(90-$p2Lat)/180)*cos((90-$p1Lat)*pi()/180)+sin((90-$p2Lat)*pi()/180)*sin((90-$p1Lat)*pi()/180)*cos(($p1Lon-$p2Lon)*pi()/180)));

print_r($calculaDistancia);