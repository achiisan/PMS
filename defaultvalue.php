<?php
	$fplanid = $_GET['fplanid'];
	include "connect.php";


$query = "SELECT Num_guests, Num_reserved from food_plan WHERE fplan_id = ".$fplanid;
$result = mysqli_query($db, $query) or die(mysqli_error($db));
$row = mysqli_fetch_array($result);
	echo "Guests:".$row['Num_guests']."Reserved: ".$row['Num_reserved'];

if($row['Num_guests'] - $row['Num_reserved'] > 0 ){
	$numtobeadded = $row['Num_guests'] - $row['Num_reserved'];
	echo "Kulang pa: ".$numtobeadded;
	$query = "SELECT * FROM food_plan_food WHERE fplan_id = ".$fplanid;
	$result = mysqli_query($db, $query) or die (mysqli_error($db));
	$row = mysqli_fetch_array($result);
	$temp = $row['Servings'];

	$temp += $numtobeadded;
	echo"Yung maiincrement:" .$temp;

	$query = "SELECT * FROM food_plan_food WHERE Fplan_id = ".$fplanid;
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	$row = mysqli_fetch_array($result);

	$food_id = $row['Food_id'];
	echo "Food_id:".$food_id;

	$query = "UPDATE food_plan_food SET Servings=".$temp." WHERE Fplan_id =".$fplanid." AND Food_id =".$food_id ;
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

}

	header("Location: orderslip.php?fplanid=".$fplanid);

?>