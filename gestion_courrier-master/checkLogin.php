<?php 
if(isset($_POST['submit'])){
	require_once('session.php');

if(!isset($_POST['username']) && !isset($_POST['password'])){
		die("attributs not set");
}

require_once('/db.php');
require_once('/userFonctions.php');

if(empty($_POST['username']) || empty($_POST['password'])) {
	close_db();
	//die('Empty user info');
	die("attributs empty");
}

$user = get_user_by_name($_POST['username']);

echo  implode(" ",$user);
if(!$user){
	//die('Bad user');
		die("there is no user");

}

$password = $_POST['password'];
close_db();

if(strcmp($password, $user['mot_de_pass']) != 0) {
	//die('Bad user');
		die("password not correct");

}

$_SESSION['user_info'] = $user;

header('Location: test.html');
}else{
	die("submit not set");
}

?>