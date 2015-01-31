
<?php
//IF not registered/login, loginfirst
session_start();
	//echo "WHAT DOES THIS THING WANT?".$_POST['stype'];
	if ($_SESSION['auth'] == 0) {
			$_SESSION['choices'] = $_POST['choice'];
			$_SESSION['stype'] = $_POST['stype'];
			$_SESSION['tok'] = 100; //add this token so if the login redirects back here, it will use the session variable instead of the post variable
			$_SESSION['numguests'] = $_POST['numguests'];
			$_SESSION['pname'] = $_POST['pname'];
			$_SESSION['date'] = $_POST['date'];
			$_SESSION['time'] = $_POST['time'];
			header("Location: loginpage.php?loc=1");
			exit;
			//echo "Walang authx";

	}
	
//else,
include 'connect.php';
include 'generatefplanid.php'; //generate the food plan id

if ($_SESSION['tok'] == 100) { //if the user logged in then it redirected back here

	$name = $_SESSION['choices']; //use th+e session variable
	$stype = $_SESSION['stype'];
	$numguests = $_SESSION['numguests'];
	$pname = $_SESSION['pname'];
	$date = $_SESSION['date'];
	$time = $_SESSION['time'];

}

else { //else use the post variable
	
$name = $_POST['choice'];
$stype = $_POST['stype'];
$numguests = $_POST['numguests'];
$pname = $_POST['pname'];
$date = $_POST['date'];
$time = $_POST['time'];
}


//echo "WHAT DOES THIS THING WANT?".$_POST['stype'];
//create a new food plan
$pname = mysqli_escape_string( $db, $pname);
$query = "INSERT INTO food_plan (Fplan_id, Cust_id, Fplan_name, Num_guests, Flag, Fplan_date, Fplan_time) VALUES(".$temp.",'". $_SESSION['login-user'] ."', '". $pname ."', ". $numguests .", 0, '".$date."', ' ".$time.":00')";

echo $query;
mysqli_query($db, $query) or die(mysqli_error($db));



foreach ($name as $pizza){

	//insert the chosen pizza choices into the database
	$query = "INSERT INTO food_plan_food (Fplan_id, Food_id) VALUES(".$temp.",'". $pizza ."')";
	mysqli_query($db, $query) or die(mysqli_error($db));
	

}
$_SESSION['tok'] = 0;
$_SESSION['fplanid'] = $temp;
echo $stype;
if ($stype == 'Invite Via Facebook'){
	header("Location: fb.php");

}
if ($stype == 'Specify Quantity'){
	header("Location: selectquantity.php");
}
?>