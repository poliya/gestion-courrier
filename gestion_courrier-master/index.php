 <?php 

require_once('session.php');

if($_SESSION['user_info'] == false){
	header('Location: login_page.php');
	
}else {
		header('Location: principal_page.php');
	}
?>