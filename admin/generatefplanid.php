<?php
$query1 = 'SELECT Fplan_id from food_plan ORDER BY Fplan_id DESC';
$result = mysqli_query($db, $query1);
$results_list = mysqli_fetch_array($result);
if(!$results_list){
	$temp = 1;

}
else {
extract($results_list) or die();

$temp = $Fplan_id;
$temp++;
}
//echo $temp;
?>