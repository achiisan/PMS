<?php include "head.php";
include "connect.php" ;
session_start();?>
				<h1>Your choice(s)</h1>
				<form method ="post" action="addquantity.php" >
				<?php
				
				$query = "SELECT Food_id, Food_name, image_url FROM food WHERE food_id IN (SELECT food_id FROM food_plan_food WHERE Fplan_id = ".$_SESSION['fplanid'].")" ;
				$result = mysqli_query($db, $query);
				$counter= 0;


				 while($row = mysqli_fetch_array($result)){

				?>
					<div id="toduplicate" style=" height: 150px; overflow: hidden; margin-bottom: 10px; border: 5px dashed #fe7105">	<!--div to be duplicated-->
						<div style=" width: 20%;  height: 100%;float: left; ">
		              		<img  class ="fg" src="admin/<?php  echo $row['image_url']; ?>">
		              	</div>
		              	<div style=" width: 60%;  height: 100%;float: left; padding-top: 25px; ">
		              		<h1 align="center" style="font-size: 35px; "><?php  echo $row['Food_name']; ?></h1>
		            	</div>
		            	<div style=" width: 20%;  height: 100%;float: left;">
		            		<h1 style=" margin-left: 10px; margin-top: 55px;font-size: 50px; float: left;">X</h1>
		            		<input type="hidden" name="<?php echo $counter;?>_name" value="<?php echo $row['Food_id'];?>"></input>
		            		<input style="margin-top: 45px; margin-left: 20px; font-size: 30px;width: 75px; height: 40px;"type="text" name="<?php echo $counter; ?>" required/>
		            		<h1>Persons</h1>
		            	</div>
		            </div>
				
				<?php
				$counter++;
			}
					echo'<input type="hidden" name="numorders" value="'.$counter.'"></input>';
				?>

				 <input class="button" type="submit" style="float:right; border: 0px; border-radius: 15px; background: #fe7105; background-image: linear-gradient(to bottom, #fe7105, #e41505); font-family: 'Century Gothic';">

		         </form>


				</form>
<?php include "footer.php"; ?>
