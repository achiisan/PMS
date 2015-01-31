<?php include  'connect.php';
include 'head.php';
 ?>

				<p style="margin-left: 50px; color: white; font-size: 23px;">CHOOSE FLAVORS</p>
		        <form action="submit.php" method="post">
		        	<div id="initial" class="popup">
		        		<h1>Number of Guests:</h1>
		        		<input type="number" name="numguests">
		        		<h1>Party Name:</h1>
		        		<input type="text" name="pname">
		        		<h1>Date and Time of Party</h1>
		        		<input type="date" name="date">
		        		<input type="time" name="time">
		        		<div  id="start"><img src="images/submit.png"/></div>
		        	</div>
		          <div id="foodcontainer">

		          <?php 
		         
                $query = 'SELECT * FROM food';
                $result = mysqli_query($db, $query);
                $_SESSION['auth'] = 0;
                while($row = mysqli_fetch_array($result)){
                
              ?>
		            <div class="foodgrid" id="toduplicate">	<!--div to be duplicated-->
		              	<img src="admin/<?php  echo $row['image_url']; ?>">
		              	<p align="center" class="ItemTitle"><?php  echo $row['Food_name']; ?></p>
		            	<p align="center" class="ItemTitle"><input id="checkbox"name="choice[]"type="checkbox" value="<?php  echo $row['Food_id']; ?>">Price: <?php  echo $row['Price_piece']; ?>/slice</p>
		            </div>
		          		
		            	 <?php }?>
		            </div>
		            	 <div id="invokepopup"><img src="images/submit.png"/></div>
		            	

		            	 <div id="choices" class="popup">
		            	 	<h1>Invite your guests!</h1>
		            		 <input  class="button long" type="submit" name="stype" value="Invite Via Facebook">
		            		  <input class="button long" type="submit" name="stype" value="Specify Quantity"/>
		            	 </div>
		         </form>
			</div>	<!--end div for all the contents-->
			
		</div>		
		<div class="center_block area">
<?php include "footer.php" ?>