<?php
include "connect.php";

echo $_GET['fid'];
$query = "DELETE FROM food WHERE Food_id = ".$_GET['fid']." ";
mysqli_query ($db, $query) or die(mysqli_error($db));
header("Location: newmenu.php");
?>