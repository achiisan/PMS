<?php
	error_reporting(E_ERROR); //Remove any error prompts
	
	session_start();
	include "head.php";
?>

<!doctype html>
<html>
		
				<div class="loginpanel">
					<form name="form-login"  role="form"  method="post" action="login.php">
						<div id="login-form" class="form-group">
						
						<!--
						<?php
							// If the user had an invalid username/password combination prompt this alert
							if ($_GET['errcode'] == 1 ){
									echo '<p class="alert alert-danger">&nbsp</span>Oops! Wrong username/password combination</p> ';
							}
								// if the user had a successful signup prompt this alert
							if ($_GET['signup'] == 1 ){
									echo '<p class="alert alert-success">&nbsp</span>User successfully added</p> ';
							}
								// else prompt this alert
							elseif ($_GET['signup'] == 2 ){
									echo '<p class="alert alert-warning">&nbsp</span>Add user not permitted</p> ';
							}
								
						?>
						-->	
					<h1>Existing user? Log in here</h1>
					<div class="input-group">
						<p> Username:<p>
						<input class="form-control" type="text" name="username" required="">
					</div>
					<div class="input-group">
						<p> Password :</p>
						<input class="form-control" type="password" size="20" name="password" required=""/>
						<input type="hidden" name="loc" value="<?php echo $_GET['loc'];?>"/>
					</div>
					<br>
					<button class="btn btn-info" type="submit">Log in</button>
						</div>	
					</form>
					<br>
					<img src="images/pizzalogin.png" width="80%" />
				</div>
						
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
<?php include "footer.php"; ?>