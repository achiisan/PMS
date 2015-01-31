		
		<h2 class="edit_title" >EDIT A MENU ITEM</h2>
						<!--php yung item number-->
				<form method="post" action="edititem.php">
					<!--IF TO EDIT THIS WILL BE APPLICABLE-->
					<!--THE INPUTS SHALL BE FROM THE DATABASE-->
					<input type="hidden" name="fid" value="<?php echo $_GET['food_id'];?>">
					<p class="formp" >ITEM NAME: <input type="text"
					 name="foodname" placeholder="  e.g.Pepperoni" /></p>
					<p class="formp"  >ITEM DESCRIPTION: <input type="text" name="fooddesc" placeholder="  e.g. Pizza Special" /></p>
					<p class="formp"  >ITEM PRICE: <input type="text" name="price" placeholder="  e.g. P50.00/SLICE" /></p>
					
					<p><input type="submit" class="addbtn" id="submit" value="SUBMIT"></p>
				</form>

	