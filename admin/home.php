<?php
session_start(); 
if($_SESSION['authadm'] != 1){
	header("Location: index.php");
}
?>
<!doctype html>
<html>
<head>
	<title>Papa Lor's | Administrator </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="css/style3.css" />
	<link type="text/css" rel="stylesheet" href="css/menu.css" />
	<link type="text/css" rel="stylesheet" href="css/dashboard.css" />
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
						<a href="#" class="navlinks" >
						<img class="homebtn" src="images/homebtn.png"><br>
						Home</a><br><!--LINK TO HOMEPAGE -->
					</div>
				</div>
				<div class="top_block aboutbtn">
					<div class="content">
						<a href="newmenu.php" class="navlinks" >
						<img class="aboutbtn" src="images/aboutbtn.png"><br>
						Menu List</a><br> <!--LINK TO MENU LIST (WHERE YOU CAN UPDATE THE MENU LIST) -->
					</div>
				</div>
				<div class="top_block myptbtn">
					<div class="content">
						<a href="upcomingadmin.php" class="navlinks" >
						<img class="myptbtn" src="images/myptbtn.png"><br>
						Reserved Parties</a><br> <!--LINK TO USER DASHBOARD PAGE -->
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
			<div class="background content" style="height: 100vh;"> <!--ADJUST HEIGHT HERE, insert all contents in this div-->
			<div class="row">
					<?php include "connect.php"; ?>
					<div class="column" id="leftcol">
						<div class="headertitle">
							LATEST MENU ITEM
						</div>
							<?php
								$query = "SELECT * FROM food ORDER BY food_id DESC";
								$result = mysqli_query($db, $query);

								$row = mysqli_fetch_array($result);
							?>
						<div class="graphdiv" id="addedfood" style="border: none;">	<!--DIV FOR THE ADDED MENU-->
							<div class="graphdiv" id="imagefood" style="border: none;">
								<!--image-->
								<img width="160px" src="<?php echo $row['image_url'];?>">
							</div>

							<div class="graphdiv" id="foodDesc" style="border: none;">
								<div class="headertitle" id="titleDesc">
									<?php echo $row['Food_name'];?>
								</div>
								<p id="desc">> <?php echo $row['Food_description'];?>
							</div>
						</div>
					</div>
					<div class="column" id="rightcol">
						<div class="headertitle">
							EVENTS TODAY
						</div>

						<div class="eventsnow">
							<?php 
								$query = "SELECT * FROM food_plan WHERE Fplan_date LIKE '%".date("Y-m-d")."%'";
										
								$result = mysqli_query($db, $query) or die(mysqli_error($db));
								while($row = mysqli_fetch_array($result)){
							?>
							<div class="ht">
								><?php echo $row['Fplan_name']; ?>
							</div>

								

							<!--div for the number of guests-->
							<div style="color: white; font-size: 19px; font-family: Rockwell, 'Courier Bold', Courier, Georgia, Times, 'Times New Roman', serif;
	font-weight: bold; word-wrap: break-word; margin-top: 5px; text-indent: 20px;">
								<?php echo $row['Num_guests']; ?> Guests
							</div>
						
								<?php 
										}
								?>
						</div>
					</div>
				</div>

				<?php include "adminfooter.php"; ?>
		