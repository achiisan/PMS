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
						<a href="index.html" class="navlinks" >
						<img class="homebtn" src="images/homebtn.png"><br>
						Home</a><br><!--LINK TO HOMEPAGE -->
					</div>
				</div>
				<div class="top_block aboutbtn">
					<div class="content">
						<a href="about.php" class="navlinks" >
						<img class="aboutbtn" src="images/aboutbtn.png"><br>
						About the App</a><br> <!--LINK TO INFORMATION PAGE ABOUT THE PARTY ALLOCATOR -->
					</div>
				</div>
				<div class="top_block myptbtn">
					<div class="content">
						<a href="#" class="navlinks" >	<!--hey change the URL ples-->
						<img class="myptbtn" src="images/myptbtn.png"><br>
						My Parties</a><br> <!--LINK TO USER DASHBOARD PAGE -->
					</div>
				</div>
				<div class="top_block ctcbtn">
					<div class="content">
						<a href="contactus.php" class="navlinks" >
						<img class="ctcbtn" src="images/ctcbtn.png"><br>
						Need help?</a><br> <!--LINK TO CONTACT US PAGE -->
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
			<div class="background content" style="height: 1300px;"> <!--ADJUST HEIGHT HERE, insert all contents in this div-->
				<p style="margin-left: 10px; color: white; font-size: 23px;">PAYMENT INFORMATION</p>
		        <form>
				  <p style="margin-left: 50px; color: white; font-size: 15px;">Payment Method:</p>
				  <p style="margin-left: 200px; color: white; font-size: 15px;"><input type="radio" name="payment" value="CreditCard" id="rdYes">Credit Card</p>
				  <p style="margin-left: 200px; color: white; font-size: 15px;"><input type="radio" name="payment" value="WebMoney" id="rdNo">Web Money</p>
				  <p style="margin-left: 200px; color: white; font-size: 15px;"><input type="radio" name="payment" value="AliPay" id="rdNo">AliPay</p>
				  <p style="margin-left: 200px; color: white; font-size: 15px;"><input type="radio" name="payment" value="BankTransfer" id="rdNo">Bank/Wire Transfer with Invoice</p>
				  <p style="margin-left: 200px; color: white; font-size: 15px;"><input type="radio" name="payment" value="Fax" id="rdNo">Fax - Credit Card</p>
		          <br>
				  <div class="ifyes">
						 <p style="margin-left: 50px; color: white; font-size: 15px;">Name on Credit Card: <input type="text" name="CCName"></p>
						 <p style="margin-left: 50px; color: white; font-size: 15px;">Credit Card Type: <select name = "CCType">
							<option value="Visa">Visa</option>
							<option value="MasterCard">MasterCard</option>
							<option value="Maestro">Maestro</option>
							<option value="Electron">Visa Electron</option>
							<option value="Solo">Solo</option>
						</select></p>
						 <p style="margin-left: 50px; color: white; font-size: 15px;">Credit Card Number: <input type="number" name="CCNumber" min="0"></p>
						 <p style="margin-left: 50px; color: white; font-size: 15px;">Expiration Date: <input type="date" name="CCExpDate"></p>
						 <p style="margin-left: 50px; color: white; font-size: 15px;">Card Security Code: <input type="text" name="CCSecCode"></p>
				  </div>

				  <div class="foodcontainer">
		            <div class="foodgrid" id="toduplicate">
		              <img src="images/credit.gif">
		            </div>
		          </div>
				  
		        </form>
			</div>	<!--end div for all the contents-->
		</div>
		<div class="center_block area">

				<div class="top_block header">
					
					<h3>PAYMENT</h3>
					
				</div>
				<div class="bottom_block footer">
					<div class="content">
					<h4>(c) Java Ave. 2014</h4>
					</div>
				</div>
		</div>
	</div>
	<script src="content/js/bootstrap.min.js"></script>
	<script src="jquery-2.1.1.js"></script>
	
	<script>
		$(document).ready(function () {
			$('.dropdown-toggle').dropdown();
		});
	</script>
	<script>
	$(document).ready(function () {
		var $div = $('.ifyes');
		$div.hide();
		var $div = $('.ifyes');
		$('input:radio[name="payment"]').change(function() {
			if (this.checked) {
			if (this.value == 'CreditCard') {
				$div.show();
			} else {
				$div.hide();
			}
			}
		});
	});
	</script>
</body>
</html>
