<?php

include "connect.php";

$fplanid = $_GET['fplanid'];

$query = "SELECT Num_guests, Num_reserved, Flag from food_plan WHERE fplan_id = ".$fplanid;
$result = mysqli_query($db, $query) or die(mysqli_error($db));
$row = mysqli_fetch_array($result);
echo '<h1 style="color:black">Order Slip</h1>';
echo "NUMBER OF GUESTS: ".$row['Num_guests']."</br>";
if($row['Flag'] == 0){
		
	echo '<div style="background-color: #fe7105 color: white">';
	echo '<strong>This order slip has not yeet been finalized. Click the FINALIZE button to pay your order.</strong></br>';
	echo '<a href="defaultvalue.php?fplanid='.$fplanid.'">';
	echo '<input type="button" class="detailsv" value="FINALIZE ORDER"></a>';
									
	echo'</div>';
}

$query = "SELECT f.food_name, fp.servings, f.price_piece FROM food f, food_plan_food fp WHERE fp.fplan_id = '".$fplanid."' AND f.food_id = fp.food_id";
$result = mysqli_query($db, $query)or die(mysqli_error($db));


$totalcost = 0;
while ($row = mysqli_fetch_array($result)){
		echo "========================</br>";
		echo $row['food_name']."</br>";
		
		$var = $row['servings'];
		echo "Servings:".$var." </br>";
		$wholeno = intval($var / 10);
		//echo $wholeno."\n";

		$decimal = $var - ($wholeno * 10) ;

		if($wholeno != 0){
		$totalcost +=  $row['price_piece'] * ($wholeno * 24);
		echo $wholeno. " x 24 inch Pizza --------------- P".($row['price_piece'] * ($wholeno * 24))."</br>";
		}
		$size = ($decimal * 2)+4;
		if ($size != 4){
			$totalcost += $row['price_piece'] * $decimal;
		echo "1 x ". ($size) . " inch Pizza ---------------- P".($row['price_piece'] * $decimal). "</br>";
		}
		
}	
echo "============================</br>";	

echo "<strong>TOTAL COST: P".$totalcost."</strong>";

$query = "UPDATE food_plan SET Total_cost =".$totalcost." WHERE Fplan_id = ".$_GET['fplanid']." ";

mysqli_query($db, $query) or die(mysqli_error($db));

?>