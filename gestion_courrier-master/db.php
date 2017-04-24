<?php 

$bdd = mysqli_connect('localhost', 'root', '', 'gestion_courrier');
mysqli_set_charset($bdd, 'utf8');
function close_db(){
	global $bdd;
	mysqli_close($bdd);
}

?>