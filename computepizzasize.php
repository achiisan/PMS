<?php
$var = $_GET['size'];

$wholeno = intval($var / 10);
//echo $wholeno."\n";
$decimal = $var - ($wholeno * 10) ;


echo $wholeno. " x 24 inch Pizza </br>";
$size = ($decimal * 2)+4;
echo "1 x ". ($size) . " inch Pizza";


?>