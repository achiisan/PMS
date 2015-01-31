<?php
//CLEARS SESSION AND REDIRECTS TO LOGIN PAGE
session_start();
$_SESSION['authadm'] = 0;

header("Location: index.php");
?>