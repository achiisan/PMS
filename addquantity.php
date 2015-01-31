<?php
// <!-- OPTION # 2: SELECT QUANTITY OF PIZZA (DATABASE CALL) -->
//eto yung naglalagay sa database :)
include "connect.php";
session_start();

echo $_SESSION['fplanid'];
echo $_POST['numorders'];
echo "WEEEE!";
$i = 0;
$totalservings = 0;

while ($i < $_POST['numorders']){
	echo "Food id: ".$_POST[$i.'_name'];
	echo "Quantity: ".$_POST[$i];

	$query = "UPDATE food_plan_food SET Servings = ".$_POST[$i]." WHERE food_id = '".$_POST[$i.'_name']."' AND Fplan_id = '".$_SESSION['fplanid']."'";
	mysqli_query($db, $query) or die(mysqli_error($db));
	//echo $query;
	$totalservings += $_POST[$i];
	$i++;

}
echo "Total:".$totalservings."</br>";
$query = "UPDATE food_plan SET Num_reserved = ".$totalservings." WHERE fplan_id = ".$_SESSION['fplanid']."";
echo $query;
mysqli_query($db, $query) or die(mysqli_error($db));

	header("Location: orderslip.php?fplanid=".$_SESSION['fplanid'])
?>
