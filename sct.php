<?php
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = '********************************';
const DEFAULT_TOKEN = '********************************';
const DEFAULT_PATH = '';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
$x=array();
for($i=6;$i<=9;$i++){
$lat = $firebase->get(DEFAULT_PATH.$i.'/act');
array_push($x,$lat);
}
echo array_values($x)[3];
echo $x;
?>
