<?php
session_start();
include "connect.php";
$query = "UPDATE food_plan SET Flag = 1 WHERE Fplan_id = ".$_SESSION['fplanid'];
mysqli_query($db, $query) or die(mysqli_error($db));
$_SESSION['fplanid'] = 0;

header("Location: newuserdashboard.php");
?>