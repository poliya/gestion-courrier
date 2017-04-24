<?php 

function get_user($extra = ''){
	
	global $bdd;
	
	$query = "SELECT * FROM utilisateur $extra";
	$result = mysqli_query($bdd, $query);

	$rowCount = mysqli_num_rows($result);
	if($rowCount ==0)
		return false;

	$users = array();

	while($row = mysqli_fetch_assoc($result)){
		$users[] = $row;
	} 
		
	mysqli_free_result($result);

		return $users;	
}

function get_user_by_id($user_id){

	$result = get_user("WHERE id_utilisateur = '$user_id'");
	if($result == false)
		return false;

	$user = $result[0];
	return $user;
}

function get_user_by_name($name){
	global $bdd;

	$result = get_user("WHERE nom_utilisateur = '$name'");

	if($result != false){
		$user = $result[0];
	}else
		$user = false; 
	return $user;
}

function add_user($username, $nom, $prenom, $password, $service, $isadmin){
	
	global $bdd;

	if(empty($name) && empty($password) && empty($email) ){
		return false;
	}

	$password = md5($password); 

	if($isadmin != 0 && $isadmin != 1){
		$isadmin = 0;
	}

	$query = "INSERT INTO utilisateur(nom_utilisateur, nom, prenom, mot_de_pass, service, admin) VALUES ('$username', '$nom', '$prenom', '$password', '$service', $isadmin)";

	$qresult = mysqli_query($bdd, $query);

	if(!$qresult){
		return false;
	}
	return true;
}

function delete_user($user_id){
	global $bdd;

	$query = 'DELETE FROM utilisateur WHERE nom_utilisateur = '.$id_utilisateur;
	$qresult = mysqli_query($bdd, $query);
	
	if(!$qresult){
		return false;
	}

	return true;
}


function update_user($user_id, $username=NULL, $nom=NULL, $prenom=NULL, $password=NULL, $service=NULL, $isadmin){
	
	global $bdd;

	$isadmin = (int)$isadmin; //if it is not a number it will turn it into zero

	//checking if the user exists
	$user = get_user_by_id($user_id);
	if(!$user)
		return false;

	//if the user didn't enter anything
	if( empty($name) && empty($password) && empty($email) && $user['isadmin'] == $isadmin ){
		return false;
	}

	$fields = array();
	$query = 'UPDATE utilisateur SET ';

	if( !empty($username) ){
		$name = mysqli_real_escape_string($bdd, strip_tags($name));
		$fields[count($fields)] = "nom_utilisateur = '$username'";
	}

	if( !empty($nom) ){
		$nom = mysqli_real_escape_string($bdd, strip_tags($nom));
		$fields[count($fields)] = "nom = '$nom'";
	}

	if( !empty($prenom) ){
		$prenom = mysqli_real_escape_string($bdd, strip_tags($prenom));
		$fields[count($fields)] = "prenom = '$prenom'";
	}

	if( !empty($password) ){
		$password = md5(mysqli_real_escape_string($bdd, strip_tags($password)));
		$fields[count($fields)] = "mot_de_pass = '$password'";
	}
	if( !empty($service) ){
		$service = mysqli_real_escape_string($bdd, strip_tags($service));
		$fields[count($fields)] = "service = '$service'";
	}

	if($isadmin != 0 && $isadmin != 1){
		$isadmin = $user['isadmin'];
	}

	$fields[count($fields)] = "isadmin = $isadmin";

	$fcount = count($fields);

	for($i = 0; $i < $fcount; $i++){
		$query .= $fields[$i];
		if($i != ($fcount - 1))
			$query .= ', '; 
	}

	$query .= ' WHERE id = '.$user_id;

	$qresult = mysqli_query($bdd, $query);
	if(!$qresult)
		return false;
	else 
		return true;
}

?>