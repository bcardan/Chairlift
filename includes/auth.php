<?php 
$users = array(
	"admin" => "adminpass",
	"bcardan" => "theford",
	"wcardan" => "ranger",
	"rocco" => "rocco",
	"Alana" => "orange",
	"nick" => "cate",
	"damien" => "password"
);

function credentials_valid($username, $password){
	global $users;
	return isset($users[$username]) && 
	$users[$username] == $password;
}

//Logs into the user $user
function log_in($user) {
	$_SESSION['user'] = $user;
}

//returns the currently logged in user
function current_user(){
	return $_SESSION['user'];
}

//requires a current user
function require_login(){
	if(!current_user()){
		$_SESSION['redirect_to'] = $_SESSION["REQUEST_URI"];
		header("Location: login.php?login_required=1");
		exit("you must log in.");
	}
}

?>