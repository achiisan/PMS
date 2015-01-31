<?php include 'connect.php' ?>
<?php
session_start();
if ($_SESSION['auth'] == 0) {

			header("Location: loginpage.php?loc=2");
			exit;
			//echo "Walang authx";

	}
	include "head.php";
?>

				<div class="uhead">
					MY PARTIES SUMMARY
				</div>	<!--end of the div for the header of the dashboard-->
				<div class="row">
					<div class="column" id="leftcol">
						<div id="table">
						<table class="listp">
							<?php
					
							$query = "SELECT Fplan_id, Fplan_name, Fplan_date, Fplan_time, Flag FROM food_plan WHERE Cust_id = '".$_SESSION['login-user']."' ORDER BY Fplan_id DESC";	
							$result = mysqli_query($db, $query) or die(mysqli_error($db));

							 while($row = mysqli_fetch_array($result)){

							?>
							<tr>
							<?php
								echo "<td class='colp'>" .$row['Fplan_name'].
								"</td>";
								echo "<td class='colp'>" .$row['Fplan_date']. " ". $row['Fplan_time'].
								"</td>";
								echo "<td class='colp'>";
								if($row['Flag']==1){
									echo "APPROVED";
								}
								else{
									echo "PENDING";

								}
								?>
								</td>
								<td>
								
									<a onclick="modalshow2(<?php echo $row['Fplan_id']; ?>)">
									<input type="button" class="detailsv" value="VIEW DETAILS">
									</a>
									
							</td>
							</tr>
							<?php } ?>
						</table>
						</div>
						<div class="uhead"style="margin-top: 30px;">
							CREATE A NEW PARTY
							<a href="user-menu.php"><img src="images/clbbtn.png" style="margin-top: 10px;"></a>
							<div style="padding: 5px; margin-top: 15px; background-color: #fe7105">
							<h1 align="center">TIPS FOR USING PAPA LOR'S PARTY PLANNER</h1>
							<p align="center">If your order has been labeled PENDING, that means that you have not paid yet for your order. Place your payment by clicking VIEW DETAILS beside your order and then Clicking FINALIZE on the order slip on the right.</p>
							</div>
						</div>	<!--end of the div for the header of the dashboard-->
					</div>
					<div class="column" id="rightcol">

						<div id="orderslip" >
							<h1 style="color:black">Your orderslip will appear here</h1>
						</div>
					</div>
				</div>
		<?php include "footer.php"; ?>
