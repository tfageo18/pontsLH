<?php 

# Refresh auto de la page
$page = $_SERVER['PHP_SELF'];
$sec  = "30";

# Chemin vers les JSON
$jsonfile        = 'https://www.havre-port.com/map/getPonts';
$jsondescription = "E:/laragon/www/ponts/json/descriptions.json";

# Liste des ponts
$mesponts = array(336,337,338,339,414,419);