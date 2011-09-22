<?php 
session_start();
require_once "includes/auth.php";

if(credentials_valid($_POST['username'], $_POST['password'])){
	log_in($_POST['username']);
	
	if($_SESSION['redirect_to']){
		header("Location: ".$_SESSION['redirect_to']);
		unset($_SESSION['redirect_to']);
	}else {
		header("Location: index.php");
	}	
	
} else{
	header("location: index.php?error=1");
	exit("You are being redirected");
}
?>