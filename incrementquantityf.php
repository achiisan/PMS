<?php
	include "connect.php";

	$query = "SELECT servings FROM food_plan_food WHERE fplan_id = ".$_POST['fplanid']." AND food_id = ".$_POST['choice']." ";

	$result = mysqli_query ($db, $query);

	while ($row = mysqli_fetch_array($result)){
		$foodquantity = $row['servings'];
		echo $foodquantity;
	}
		$foodquantity++;

	$query = "UPDATE food_plan_food SET servings =".$foodquantity." WHERE fplan_id = ".$_POST['fplanid']." AND food_id = ".$_POST['choice']." ";
	echo $query;

	mysqli_query($db, $query) or die (mysqli_error($db));

	$query =  "SELECT Num_reserved from food_plan WHERE Fplan_id = ".$_POST['fplanid'];
	$result = mysqli_query($db, $query) or die(mysql_error($db));
	while($row = mysqli_fetch_array($result)){
	$acc = $row['Num_reserved'];
	echo "TEST".$acc;
	}
	//echo "PAK".$row['Num_reserved'];
	$acc = $acc + 1;
	echo "PAKPAK".$acc;
	$query = "UPDATE food_plan SET Num_reserved = ".$acc." WHERE Fplan_id = ".$_POST['fplanid'];
	mysqli_query($db, $query) or die(mysqli_error($db));

	header("Location: thankyou.php");
?>