<?php include "adminhead.php";?>

	<div class="registerpanel">
					<h1>Don't have an account yet? Sign up here</h1>
					<div class="modal fade" id="modal-signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-body">
								<div id="modalContent">
									<!-- Get info from user -->
									<form action="register.php" role="form" method="post" id="signup-now">
									<div id="input-group">
										<p>Username</p>
										<input type="text" name="username" required="">
									</div>
									<div id="input-group">
										<p>Password</p>
										<input type="password" size="20" name="password" required="" min="4" max="20">
									</div>
									<div id="input-group">
										<p>Confirm Password</p>
										<input type="password" size="20" name="confirm_password" required="" min="4" max="20">
									</div>
									<div id="input-group">
										<p>Name</p>
										<input type="text" size="20" name="cust_name" required="" min="4" max="20">
									</div>
									<div id="input-group">
										
										<p><button type="submit">Register Account</button></p>
									</div>
									</form>
								</div>
							</div>
							</div>
						  </div>
					</div>
				</div>			

<?php include "adminfooter.php";?>