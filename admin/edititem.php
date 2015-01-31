<?php
include "connect.php";
echo $_POST['foodname'].$_POST['fooddesc'].$_POST['price'].$_POST['fid'];

$query = "UPDATE food SET Food_name = '".$_POST['foodname']."', Food_description = '".$_POST['fooddesc']."', Price_piece = ".$_POST['price']." WHERE Food_id = ".$_POST['fid']." ";
mysqli_query ($db, $query) or die(mysqli_error($db));
header("Location: newmenu.php");
?>