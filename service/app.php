<?php
require_once 'Reader.php';
require_once 'BasePilos.php';
require_once 'BasePilosMerge.php';

$fileName = "Base-pilos.json";
$reader = new Reader();
$basePilos = new BasePilos();
$basePilosMerge = new BasePilosMerge();

$reader->read("Resources/", "Base-pilos.xlsx");
$basePilos->setReader($reader);
$basePilosMerge->setReader($reader);
$basePilosMerge->setBaseMide($basePilos);

$dataArray = array();

$dataArray = $basePilosMerge->getArrayAllEntitiesToBuildJson();
$file = fopen('Resources/'.$fileName.'', "w") or die("Problemas para generar el archivo Json - ( Resources/".$fileName." )");
fwrite($file, json_encode($dataArray,JSON_PRETTY_PRINT));

echo "El archivo ($fileName) se genero correctamente";