<?php
session_start();
if ($_SESSION['auth'] == 0) {

			header("Location: loginpage.php");
			exit;
			//echo "Walang authx";

	}
	include "connect.php";

?>
<!doctype html>
<html>
<head>
	<title>Papa Lor's | Celebrate with us! </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="css/style3.css" />
</head>
<body>
	<div class="content">
		<div class="background panel">
		<div class="left_block panel">
			<div class="content">
				<div class="top_block pllogo">
					<div class="content">
						<img class="PLLogo" src="images/PLLogo.png">
					</div>
				</div>
				<div class="top_block homebtn">
					<div class="content">
						<img class="homebtn" src="images/homebtn.png"><br>
						<a href="index.html" class="navlinks" >Home</a><br><!--LINK TO HOMEPAGE -->
					</div>
				</div>
				<div class="top_block aboutbtn">
					<div class="content">
						<img class="aboutbtn" src="images/aboutbtn.png"><br>
						<a href="#" class="navlinks" >About the App</a><br> <!--LINK TO INFORMATION PAGE ABOUT THE PARTY ALLOCATOR -->
					</div>
				</div>
				<div class="top_block myptbtn">
					<div class="content">
						<img class="myptbtn" src="images/myptbtn.png"><br>
						<a href="#" class="navlinks" >My Parties</a><br> <!--LINK TO USER DASHBOARD PAGE -->
					</div>
				</div>
				<div class="top_block ctcbtn">
					<div class="content">
						<img class="ctcbtn" src="images/ctcbtn.png"><br>
						<a href="#" class="navlinks" >Need help?</a><br> <!--LINK TO CONTACT US PAGE -->
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="background area">
			<div class="background blank">
			</div>
			<div class="background blank2">
			</div>
			<div class="background content"> <!--insert all contents in this div-->
				<h1>Your choice(s)</h1>
				<form method ="post" action="" >
				<?php
				
				$query = "SELECT Food_name, image_url FROM food WHERE food_id IN (SELECT food_id FROM food_plan_food WHERE Fplan_id = ".$_SESSION['fplanid'].")" ;
				$result = mysqli_query($db, $query);

				 while($row = mysqli_fetch_array($result)){

				?>
					<div class="foodgrid" id="toduplicate" style=" height: 150px; overflow: hidden; margin-bottom: 10px; border: 5px dashed #fe7105">	<!--div to be duplicated-->
						<div style=" width: 20%;  height: 100%;float: left; ">
		              		<img src="<?php  echo $row['image_url']; ?>">
		              	</div>
		              	<div style=" width: 60%;  height: 100%;float: left; padding-top: 25px; ">
		              		<h1 align="center" class="ItemTitle" style="font-size: 50px; "><?php  echo $row['Food_name']; ?></h1>
		            	</div>
		            	<div style=" width: 20%;  height: 100%;float: left;">
		            		<h1 style=" margin-left: 10px; margin-top: 55px;font-size: 50px; float: left;">X</h1>
		            		<input style="margin-top: 45px; margin-left: 20px; font-size: 30px;width: 75px; height: 40px;"type="text" name="" required/>
		            	</div>
		            </div>
				
				<?php
			}
				?>

				 <input type="submit" style="float:right" >

		         </form>


				</form>
			</div>
		</div>
		<div class="center_block area">

				<div class="top_block header">
					<div class="content">
					<h3>label here. label here. label here. </h3>
					</div>
				</div>
				<div class="bottom_block footer">
					<div class="content">
					<h4>(c) Java Ave. 2014</h4>
					</div>
				</div>
		</div>
	</div>

</body>
</html>
