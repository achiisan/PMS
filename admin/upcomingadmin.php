<?php include  'connect.php';
include "adminhead.php";
session_start(); 
if($_SESSION['authadm'] != 1){
	header("Location: index.php");
}
?>

			<form>
					<p style="margin-left: 50px; color: white; font-size: 23px;">UPCOMING EVENTS</p>
		       
					<table style="width:100%">
						<tr>
							<th style="margin-left: 50px; color: white; font-size: 15px;">PARTY NAME</th>
							<th style="margin-left: 50px; color: white; font-size: 15px;">PARTY DATE</th>
							<th style="margin-left: 50px; color: white; font-size: 15px;">NO. OF GUESTS</th>
							<th style="margin-left: 50px; color: white; font-size: 15px;">CREATED BY</th>
							<th style="margin-left: 50px; color: white; font-size: 15px;">ACTION</th>
						</tr>

				<?php 
                $query = 'SELECT * FROM food_plan WHERE (Fplan_date -'.date("Y-m-d").') >= 0 AND Flag =1 ORDER BY Fplan_date';
                $result = mysqli_query($db, $query);

                while($row = mysqli_fetch_array($result)){
					$guests = $row['Num_guests'];
					
					$name = $row['Cust_id'];
				?>
				
						<?php echo "<tr>"?>
							<td style="text-align: center; color: white; font-size: 15px;"><?php echo $row['Fplan_name']; ?></td>
							<td style="text-align: center; color: white; font-size: 15px;"><?php echo $row['Fplan_date']. " ". $row['Fplan_time']; ?></td>
							<?php  echo "<td>" .$guests. "</td>";?>
							<?php  echo "<td>" .$name. "</td>";?>
							<td style="text-align: center; color: white; font-size: 15px;"><input type="button" class="addbtn" id="add" onClick="modalshow3(<?php echo $row['Fplan_id'];?>)" value="View Order Slip"></td>
						<?php echo "</tr>"?>
						<?php }?>
					</table>
				
					<div class="editform" id="formf">
					<input type="button" class="addbtn" id="close" value="X CLOSE WINDOW" onClick="hideDiv('formf');">
					<p class="edit_title2">ORDER SLIP</p>
					
				<form>
					<!--IF TO EDIT THIS WILL BE APPLICABLE-->
					<!--THE INPUTS SHALL BE FROM THE DATABASE-->
					<div id="orderslip" class="slip">
					
					</div>
				</form>
			</div>

		</form>
		<?php include "adminfooter.php"; ?>
