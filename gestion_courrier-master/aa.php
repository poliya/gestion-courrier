<?php 


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<form action="aa.php" method="post">

	<table align="center" >
		
		<tr>
			<td >num courrier:</td>
			<td><input style="width: 167px" type="text" name="num_courrier"></td>
		</tr>

		<tr>
			<td>date saisie:</td>
			<td> <input type="date" name="date_saisie"></td>
		</tr>

		<tr>
			<td>date exp:</td>
			<td> <input type="date" name="date_exp"></td>
		</tr>

		<tr>
			<td>source:</td>
			<td> <input type="text" name="source"></td>
		</tr>

		<tr>
			<td>destination:</td>
			<td> <input type="text" name="destination"></td>
		</tr>

		<tr>
			<td>objet:</td>
			<td> <input type="text" name="objet"></td>
		</tr>

		<tr>
			<td>image lien:</td>
			<td> <input type="text" name="image_lien"></td>
		</tr>

		<tr>
			<td>nature:</td>
			<td> <input type="text" name="nature"></td>
		</tr>

		<tr>
			<td>etat traitement:</td>
			<td> <input type="text" name="etat_traitement"></td>
		</tr>

		<tr>
			<td><input type="submit" value="Save"></td>
		</tr>

	</table>
	
</form>

</body>
</html>

<?php 




include('db.php');
include('courrierFonction.php');


$result = add_courrier($_POST['num_courrier'], $_POST['date_saisie'], $_POST['date_exp'], $_POST['source'], $_POST['destination'], $_POST['objet'], $_POST['image_lien'], $_POST['nature'], $_POST['etat_traitement']);

echo mysqli_error($bdd);

close_db();

if($result)
	die('Success');
else
	die('Failure');


?>
