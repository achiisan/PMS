
<?php
include "connect.php";
include "headblank.php";

$query = "SELECT Flag FROM food_plan WHERE Fplan_id = ".$_GET['fplanid']." ";
$result = mysqli_query($db, $query) or die(mysqli_error($db));

$row = mysqli_fetch_array($result);

if ($row['Flag'] == 1){
	echo '<img src="images/PLLogo.png" width="500px;" align="center" / >';
	echo "<h1>Sorry. It seems like the person who invited you has already chosen a food for you.</h1>";
	echo "<h1>Still, he would like to see you at the party. Ciao! </h1>";
?>
 <script type="text/javascript">
function Redirect()
{
    window.location="http://facebook.com";
}

document.write('<h2 style="color:white;">You will be redirected to Facebook in 5 seconds.</h2>');
setTimeout('Redirect()', 5000);
</script>

<?php	
exit;
}
?>

				<h1>You have been invited! Please choose a food you desire</h1>
				<form method ="post" action="incrementquantityf.php" >
				<input type="hidden" name="fplanid" value="<?php echo $_GET['fplanid']?>">
				<?php
				
				$query = "SELECT Food_id, Food_name, image_url FROM food WHERE food_id IN (SELECT food_id FROM food_plan_food WHERE Fplan_id = ".$_GET['fplanid'].")" ;
				$result = mysqli_query($db, $query);
					

				 while($row = mysqli_fetch_array($result)){

				?>
			
		             <div class="foodgrid" id="toduplicate">	<!--div to be duplicated-->
		              	<img src="admin/<?php  echo $row['image_url']; ?>">
		              	<p align="center" class="ItemTitle"><?php  echo $row['Food_name']; ?></p>
		            	<p align="center" class="ItemTitle"><input id="radio" name="choice"type="radio" value="<?php  echo $row['Food_id']; ?>"></p>
		            </div>
				
				<?php
				
			}
					
				?>

				 <input class="button" type="submit" style="float:right">

		         </form>


				</form>
<?php include "footer.php" ?>