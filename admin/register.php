<?php
	//Creates a user and then puts it on a database.
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$name = $_POST['cust_name'];
	
	#to check username
/*
	
	$data = 'SELECT * FROM accounts WHERE username = "'.$username.'"';
 	#$query = mysql_query($data) or die("Couldn't execute query. ". mysql_error());
  	#$data2 = mysql_fetch_array($query); 	

	if($data == $Account_username){
		
		echo "username is already used.<br>";
			
	
	}	
*/

	include 'connect.php';
	
	if(strlen($username) < 6){
	
		echo "Minimum username length is 6.";
		echo "<br><br>";


	}

	

	if(strlen($password) < 4){
	
		echo "Minimum password length is 4.";
		echo "<br><br>";


	}

	if($password != $confirm_password){
	
		echo "Password does not match. Re-enter your password.";
		echo "<br>";
	

	}

	else{
	#register here	
	$password = md5($password);

	$query = 'INSERT INTO administrator
			 (Administrator_id, Administrator_password)
			 VALUES
			 ( "'.$username.'", "'.$password.'")';
			
						
			mysqli_query($db, $query) or die (header("Location: index.php?signup=2"));
	
			
			header("Location: index.php?signup=1");
	
	}
?>



