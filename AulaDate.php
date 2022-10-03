<?php

// echo date("d/m/Y"); //data, mês e ano formatada

$data = new DateTime();
echo $data->format("d/m/Y H:i:s");
echo PHP_EOL;


$data2 = new DateTime();
$intervalo = new DateInterval("P5Y10M5DT10H50M10S");
$data2->sub($intervalo);
var_dump($data2);