 <?php 
require_once('courrierFonction.php');
require_once('db.php');
 echo'
<!DOCTYPE html>
<html>
<head>
	<title>Gestion courrier</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css" />
	<meta charset="utf-8" />
</head>
<body>
	<div id="container">
		<div id="bigtopbar">
		<TABLE width="100%" height="100px" align="center">
			<tr>
				<td align="center"><img src="images/logo3.PNG" width="auto" height="100px" ></td>
				<td  align="center" ><p  class="textbigtopbar" align="center">Gestion Courrier</p></td>
				<td align="center"><img src="images/logo2.PNG" width="150px" height="150px"></td>
			</tr>
		</TABLE>
		</div>

		<div id="smalltopbar">
		<TABLE height="100px" align="left">
			<tr>
				<td  align="center" ><a href="http://www.google.com" title="Courrier"><p  class="textsmalltopbar" align="center" >Courrier</p></a></td>	
				<td  align="center" ><a href="http://www.google.com" title="Dossier"><p  class="textsmalltopbar" align="center" >Dossier</p></a></td>	
				<td  align="center" ><a href="http://www.google.com" title="Archive"><p  class="textsmalltopbar" align="center" >Archive</p></a></td>
				<td  align="center" ><a href="error_page.php" title="Profile"><p  class="textsmalltopbar" align="center" >Profile</p></a><td>
			</tr>
		</TABLE>		
		</form>
		</div>

	</div>

	<div>
	<table width="100%" style="padding-bottom:16px" >
			<tr>
				<td><a href="addCourrier.php" title="ajouter une courrier"><p  id="ajouterbutton" align="center" >Ajouter</p></a></td>
				<td><form method="post" action="../viewCourrierDansBaseD.php>
					<table  id="filtercourrierbar">
							<td>
								<input type="text" name="ref_courrier"  placeholder="courrier reffrence">
							</td>
							<td>
								<input type="date" name="date_saisie"  placeholder="date saisie">
							</td>
							<td>
								<input type="date" name="date_exp" placeholder="date exp">
							</td>
							<td>
								<input type="text" name="destination" placeholder="destination">
							</td>
							<td>
								<input type="text" name="objet" placeholder="objet">
							</td>
							<td>
								<select name="nature" placeholder="nature">
									<option value="morassaladakhiliya" selected>nature</option>
      								<option value="morassaladakhiliya">مراسلة داخلية</option>
     								<option value="morassaladakhiliya">مراسلة خارجية</option>
     								<option value="morassaladakhiliya">مراسلة وزارية</option>
     								<option value="morassaladakhiliya">مراسلة إقليمية</option>
    							</select>
							</td>
							<td>
								<select name="nature" placeholder="etat traitement">
									<option value="morassaladakhiliya" selected>etat de traitement</option>
     								<option value="morassaladakhiliya">traitée</option>
      								<option value="morassaladakhiliya">en cours de traitement</option>
     								<option value="morassaladakhiliya">archivée</option>
     								<option value="morassaladakhiliya">arrivée</option>
     								<option value="morassaladakhiliya">envoyée</option>
    							</select>
							</td>
							<td>
								<button  name="trouver">trouver</button>
							</td>

					</table>
				</form></td>
	</table>
		<form method="post" action="viewCourrierDansBaseD.php">

		</form>
	</div>
	
	<div >
		<table width="100%" id="viewdatatable">
		<tr>
			<td   class="tableelmenthead" ><p  class="tableelmentheadparag"  align="center" >num courrier</p></a></td>
			<td   class="tableelmenthead" ><p  class="tableelmentheadparag"  align="center" >date saisie</p></a></td>
			<td   class="tableelmenthead" ><p  class="tableelmentheadparag"  align="center" >date exp</p></a></td>
			<td   class="tableelmenthead" ><p  class="tableelmentheadparag"  align="center" >source</p></a></td>
			<td   class="tableelmenthead" ><p  class="tableelmentheadparag"  align="center" >destination</p></a></td>
			<td   class="tableelmenthead" ><p  class="tableelmentheadparag"  align="center" >objet</p></a></td>
			<td   class="tableelmenthead" ><p  class="tableelmentheadparag"  align="center" >image lien</p></a></td>
			<td   class="tableelmenthead" ><p  class="tableelmentheadparag"  align="center" >nature</p></a></td>
			<td   class="tableelmenthead" border-right="0px"><p  class="tableelmentheadparag"  align="center" >etat traitement</p></a></td>
		</tr>';

		$condition="arrive";
		$userArray=get_courrier();

		if($userArray!=null){
		foreach($userArray as $temp) {
		$ref_courrier=$temp['ref_courrier'];
		$courrier_id=$temp['courrier_id'];
		$date_saisie=$temp['date_saisie'];
		$date_exp=$temp['date_exp'];
		$source=$temp['source'];
		$destination=$temp['destination'];
		$objet=$temp['objet'];
		$image_lien=$temp['image_lien'];
		$nature=$temp['nature'];
		$etat_traitement=$temp['etat_traitement'];
		
		echo '
		<tr>
			<td   class="tableelmentbody" ><p  class="tableelmentbodyparag"  align="center" >'.$ref_courrier.'</p></td>
			<td   class="tableelmentbody" ><p  class="tableelmentbodyparag"  align="center" >'.$date_saisie.'</p></td>
			<td   class="tableelmentbody" ><p  class="tableelmentbodyparag"  align="center" >'.$date_exp.'</p></td>
			<td   class="tableelmentbody" ><p  class="tableelmentbodyparag"  align="center" >'.$source.'</p></td>
			<td   class="tableelmentbody" ><p  class="tableelmentbodyparag"  align="center" >'.$destination.'</p></td>
			<td   class="tableelmentbody" ><p  class="tableelmentbodyparag"  align="center" >'.$objet.'</p></td>
			<td   class="tableelmentbody" ><a href="scanned/'.$image_lien.'" title="voir le e-document" target="_blank"><img  class="tableelmentbodyparag"  align="center" src="images/file.PNG" style="
    width: 50px;height: 50px"></td>
			<td   class="tableelmentbody" ><p  class="tableelmentbodyparag"  align="center" >'.$nature.'</p></td>
			<td   class="tableelmentbody" border-right="0px"><p  class="tableelmentbodyparag"  align="center" >'.$etat_traitement.'</p></td>
		</tr>';
		}
		}else{
			echo'<tr width="100%">
			<td colspan="10"  width="100%" align="center" class="tableelmentbody" border-right="none"><p class="tableelmentbodyparag" align="center" >aucun enregistrement.</p></a></td>
			</tr>';		
		}
		
		

	echo'</table>
		</div>
	</body>
	</html>';
?>