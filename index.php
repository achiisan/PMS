<?php
session_start();


?>
<!doctype html>
<html>
<head>
	<title>Papa Lor's Pizza</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/style1.css" /><!--style1.css is the stylesheet for homepage format-->
    <link rel="stylesheet" type="text/css" href="css/style2.css" /><!--style1.css is the stylesheet for anything else-->
	<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
</head>
<body>
	<div id="main_div">

			<!--Button1 (left) -->
			<div id="content_button1">
				<h1>Manage your existing parties here</h1>
				<a href="newuserdashboard.php"><!--LINK TO INFORMATION PAGE ABOUT THE PARTY ALLOCATOR -->
						<img style="margin-left: 10%;"src="images/login.png" />
					</a><br>
			</div>
			<!--Button1 (right) -->
			<div id="content_button2">
				<h1>Create a new party here</h1>
				<center>
					<a href="user-menu.php"><!--LINK TO INFORMATION PAGE ABOUT THE PARTY ALLOCATOR -->
						<img src="images/clbbtn.png" />
					</a><br>
				
				</center>
				 
			</div>
			<!--logo (center) -->
			<div id="content_center">
				<img src = "images/pllogo.png" width="100%" />
			</div>

		</div>

			<!--Pizza pictures (bottom)-->
			<div id="footer_div">
				
			</div>
</body>

</html>
