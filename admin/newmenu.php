<?php include  'connect.php';
include "adminhead.php"; ?>

				<p style="margin-left: 50px; color: white; font-size: 23px;">MENU LIST</p>
				<input type="button" class="addbtn" id="add" onClick="setVisibility('forme');" value="ADD NEW MENU ITEM">
		        <form>
		          <div id="foodcontainer">
		          
		          
		          <?php 
                $query = 'SELECT * FROM food';
                $result = mysqli_query($db, $query);

                while($row = mysqli_fetch_array($result)){
                
              ?>

		            <div class="foodgrid" id="toduplicate">	<!--div to be duplicated-->
		              <img src="<?php  echo $row['image_url']; ?>">
		              <p align="center" class="ItemTitle"><?php  echo $row['Food_name']; ?></p>
		               <p align="center" class="ItemTitle">Price: <?php  echo $row['Price_piece']; ?>/slice</p>
		              
		              	
		              	<a href="deleteitem.php?fid=<?php echo $row['Food_id'];?>"><input type="button" class="delbtn" id="delete" value="DEL"><span id="count"></span></a>
		              
		              <a><input type="button" class="editbtn" id="edit" onClick="modalshow(<?php echo $row['Food_id'];?> )" value="EDIT"><span id="count"></span></a>
		            </div>
		          
		           <?php }?>
		          </div>

		         </form>
			</div>	<!--end div for all the contents-->
			<div class="editform" id="forme" style="margin-left: auto; margin-right: auto;">
					<h2 class="edit_title">ADD A MENU ITEM</h2>
					*
				<form action="addmenu.php" method="post" enctype="multipart/form-data">
					<!--IF TO EDIT THIS WILL BE APPLICABLE-->
					<!--THE INPUTS SHALL BE FROM THE DATABASE-->
					<p class="formp" />ITEM NAME: <input type="text" name="foodname" placeholder="  e.g.Pepperoni" />
					<p class="formp" />ITEM DESCRIPTION: <input type="text" name="fooddesc" placeholder="  e.g. Pizza Special" />
					<p class="formp" />ITEM PRICE: <input type="text" name="price" placeholder="  e.g. P50.00/SLICE" />
					<p class="formp" />ITEM PHOTO:   <input type="file" name="fileToUpload" id="fileToUpload">
					<p><input type="button" class="addbtn" id="cancel" value="CANCEL" onClick="hideDiv('forme');">  <input type="submit" class="addbtn" id="submit" value="SUBMIT">
				</form>

				
			</div>

			<div class="editform" id="forme2" style="margin-left: auto; margin-right: auto;">
					<input type="button" class="addbtn" id="close" value="X CLOSE WINDOW" onClick="hideDiv('forme2');">
					<div id="content">
					</div>
					  
			<?php include "adminfooter.php";?>