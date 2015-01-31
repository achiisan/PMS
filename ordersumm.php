<div id="ordersumm" style="height: 550px">
		<h1> Order Summary</h1>
	<?php
		include "connect.php";

	$fplanid = $_GET['fplanid'];
	$query = "SELECT f.food_name, fp.servings, f.price_piece, f.image_url FROM food f, food_plan_food fp WHERE fp.fplan_id = '".$fplanid."' AND f.food_id = fp.food_id";
	$result = mysqli_query($db, $query)or die(mysqli_error($db));


	while ($row = mysqli_fetch_array($result)){
		?>
		<div class="ordercontainer">
		<?php
			echo '<img class="fg" src="admin/'.$row['image_url'].'"/>';
			echo $row['food_name']."</br>";
			
			$var = $row['servings'];
			echo "For <h1>".$var." Person/s</h1> </br>";
		
		?>
		</div>	
			
		<?php
	}	
	?>
</div>