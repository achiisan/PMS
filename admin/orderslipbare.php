<?php

include "connect.php";

$fplanid = $_GET['fplanid'];
$query = "SELECT f.food_name, fp.servings, f.price_piece FROM food f, food_plan_food fp WHERE fp.fplan_id = '".$fplanid."' AND f.food_id = fp.food_id";
$result = mysqli_query($db, $query)or die(mysqli_error($db));
echo"<h2>Order Slip:</h2>";
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