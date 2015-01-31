<?php
 session_start();
 include "head.php"
 ?>

				<p style="margin-left: 10px; color: white; font-size: 23px;">PAYMENT INFORMATION</p>
		        <form>
				  <!--<p style="margin-left: 50px; color: white; font-size: 15px;">Name:<input type="text" name="name" required></p>
				  <p style="margin-left: 100px; color: white; font-size: 15px;">First Name: <input type="text" name="fname" size="23px"></p>
				  <p style="margin-left: 100px; color: white; font-size: 15px;">Middle Name: <input type="text" name="mname"></p>
				  <p style="margin-left: 100px; color: white; font-size: 15px;">Last Name: <input type="text" name="lname" size="23.5px"></p>
				  <p style="margin-left: 50px; color: white; font-size: 15px;">Address:<input type="text" name="address" required></p>
				  <p style="margin-left: 100px; color: white; font-size: 15px;">House No.: <input type="number" name="houseno" size="23px"></p>
				  <p style="margin-left: 100px; color: white; font-size: 15px;">Street: <input type="text" name="street" size="27.75px"></p>
				  <p style="margin-left: 100px; color: white; font-size: 15px;">Barangay: <input type="text" name="barangay" size="24px"></p>
				  <p style="margin-left: 100px; color: white; font-size: 15px;">City/Town: <input type="text" name="city" size="23px"></p>
				  <p style="margin-left: 100px; color: white; font-size: 15px;">Province: <input type="text" name="province" size="24.99px"></p>
				  <p style="margin-left: 50px; color: white; font-size: 15px;">Birthday:<input type="date" name="bday" required></p>-->
				  <p style="margin-left: 50px; color: white; font-size: 15px;">Payment Method:</p>
				  <p style="margin-left: 200px; color: white; font-size: 15px;"><input type="radio" name="payment" value="CreditCard" id="watch-me">Credit Card</p>
				  <p style="margin-left: 200px; color: white; font-size: 15px;"><input type="radio" name="payment" value="WebMoney" id="rdNo">Web Money</p>
				  <p style="margin-left: 200px; color: white; font-size: 15px;"><input type="radio" name="payment" value="AliPay" id="rdNo">AliPay</p>
				  <p style="margin-left: 200px; color: white; font-size: 15px;"><input type="radio" name="payment" value="BankTransfer" id="rdNo">Bank/Wire Transfer with Invoice</p>
				  <p style="margin-left: 200px; color: white; font-size: 15px;"><input type="radio" name="payment" value="Fax" id="rdNo">Fax - Credit Card</p>
		          <br>
				  <div id="show-me" style="display:none">
						 <p style="margin-left: 50px; color: white; font-size: 15px;">Name on Credit Card: <input type="text" name="CCName"></p>
						 <p style="margin-left: 50px; color: white; font-size: 15px;">Credit Card Type: <select name = "CCType">
							<option value="Visa">Visa</option>
							<option value="MasterCard">MasterCard</option>
							<option value="Maestro">Maestro</option>
							<option value="Electron">Visa Electron</option>
							<option value="Solo">Solo</option>
						</select></p>
						 <p style="margin-left: 50px; color: white; font-size: 15px;">Credit Card Number: <input type="text" name="CCNumber" min="0"></p>
						 <p style="margin-left: 50px; color: white; font-size: 15px;">Expiration Date: <input type="date" name="CCExpDate"></p>
						 <p style="margin-left: 50px; color: white; font-size: 15px;">Card Security Code: <input type="password" name="CCSecCode"></p>
				  </div>

				  <div class="foodcontainer">
		            <div  id="toduplicate">
		              <img src="images/credit.gif" style="margin-left: 120px;"></br>

		              <a href="checkout.php" ><img src="images/checkout.png" style="margin-top: 50px; float: right; margin-right: 40px;"/></a>
		            </div>
		          </div>
				  
		        </form>
		<?php include "footer.php";?>