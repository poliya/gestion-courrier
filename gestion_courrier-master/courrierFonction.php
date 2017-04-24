<?php 

function get_courrier($extra = ''){
	
	global $bdd;
	
	$query = "SELECT * FROM courrier $extra";
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


function add_courrier($ref_courrier, $date_saisie, $date_exp=NULL, $source, $destination, $objet, $image_lien, $nature, $etat_traitement){
	
	global $bdd;

	if(empty($ref_courrier) && empty($date_saisie) && empty($date_exp) && empty($source) && empty($destination) && empty($objet) && empty($image_lien) && empty($nature) && empty($etat_traitement)){
		return false;
	}
	
	$query = "INSERT INTO courrier(ref_courrier, date_saisie, date_exp, source, destination, objet, image_lien, nature, etat_traitement) VALUES ('$ref_courrier', '$date_saisie','$date_exp', '$source','$destination','$objet', '$image_lien','$nature','$etat_traitement')";

	$qresult = mysqli_query($bdd, $query);

	if(!$qresult){
		return false;
	}
	return true;
}

function delete_courrier($courrier_id){
	global $bdd;

	$query = 'DELETE FROM courrier WHERE courrier_id = '.$courrier_id;
	$qresult = mysqli_query($bdd, $query);
	
	if(!$qresult){
		return false;
	}

	return true;
}


function update_courrier($num_courrier, $date_saisie=NULL, $date_exp=NULL, $source=NULL, $destination=NULL, $objet=NULL, $image_lien=NULL, $nature=NULL, $etat_traitement=NULL){
	
	global $bdd;

	$isadmin = (int)$isadmin; //if it is not a number it will turn it into zero

	//checking if the user exists
	$user = get_user_by_id($user_id);
	if(!$user)
		return false;

	//if the user didn't enter anything
	if( empty($num_courrier) && empty($date_saisie) && empty($date_exp) && empty($source) && empty($destination) && empty($objet) && empty($image_lien) && empty($nature) && empty($etat_traitement)){
		return false;
	}

	$fields = array();
	$query = 'UPDATE courrier SET ';

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

	if( !empty($service) ){
		$service = mysqli_real_escape_string($bdd, strip_tags($service));
		$fields[count($fields)] = "service = '$service'";
	}

	if( !empty($service) ){
		$service = mysqli_real_escape_string($bdd, strip_tags($service));
		$fields[count($fields)] = "service = '$service'";
	}

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