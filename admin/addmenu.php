<?php


include "imageuploader.php";
include "connect.php";
$foodname = $_POST['foodname'];
$fooddesc = $_POST['fooddesc'];
$price = $_POST['price'];
echo $fooddesc."</br>";

$query = "INSERT INTO food (Food_name, Food_description, Food_type, Image_url, Price_piece) VALUES ('".$foodname."', '".$fooddesc."', 'Pizza', '".$target_file."', ".$price." )";
echo $query;
mysqli_query($db, $query) or die(mysqli_error($db));

header("Location: newmenu.php");


?>