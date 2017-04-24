<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/styles2.css">
</head>

<body>

    <div id="form">
        <form action="" method="post" enctype="multipart/form-data">

            <fieldset>
                <legend>Scan</legend>

                <div id="objet">
                    <input type="file" name="imageUpload" id="imageUpload">
                </div>

            </fieldset>

            <fieldset>
                <legend>Courrier</legend>

                <p style="padding:0; margin:10px 0 0 0">Registre arrivee</p>
                <div id="nature">
                    <label>Nature:</label>
                    <select name="nature">
                <option value="lettre">Lettre</option>
                <option value="Fax">Fax</option>
                <option value="telecopie">Télécopie</option>
            </select>
                </div>

            </fieldset>

            <fieldset>
                <legend>Horodatage</legend>

                <div id="Arrive">
                    <label for="arrive">Arrivé Le:</label>
                    <input type="date" id="arrive" name="date_arrivee">
                </div>

                <div id="Du">
                    <label for="du"> Du:</label>
                    <input type="date" id="duu" name="date_expiration">
                </div>

            </fieldset>

            <fieldset>
                <legend>Correspondant </legend>

                <div class="row">
                    <label for="referance"> Réferance:</label>
                    <input type="text" id="referance" name="referance">
                </div>

                <div class="row">
                    <label for="source"> Source:</label>
                    <input type="text" id="source" name="source">
                </div>

                <div class="row">
                    <label for="destination"> Destination:</label>
                    <input type="text" id="destination" name="destination">
                </div>

            </fieldset>

            <fieldset>
                <legend>Détails</legend>

                <div id="objet">
                    <label for="objet">Objet:</label>
                    <textarea cols="40" rows="3" name="objet"></textarea>
                </div>

            </fieldset>

            <fieldset>
                <legend>Traitement</legend>

                <label>Service:</label>
                <select name="traitement">
                <option value="education">Direction de l'éducation</option>
                <option value="RH">Direction des ressources humaines</option>
            </select>

            </fieldset>

            <!-- <fieldset>
        <legend>Diffusion </legend>
           <label>Service:</label>
            <select name="diffusion">
                <option value="">Direction de l'éducation</option>
                <option value="">Direction des ressources humaines</option>
                <option value="">Direction de</option>
                <option value="">Direction de</option>
                <option value="">Direction de</option>
            </select>
    </fieldset>-->

            <input type="submit" name="envoyer" value="Envoyer">

        </form>
    </div>
</body>

</html>

<?php 
if(isset($_POST['envoyer'])){
   $nature = $_POST['nature'];
   $date_arrivee = $_POST['date_arrivee'];
   $date_expiration = $_POST['date_expiration'];
   $referance = $_POST['referance'];
   $source = $_POST['source'];
   $destination = $_POST['destination'];
   $objet = $_POST['objet'];
   $traitement = $_POST['traitement'];
   //if(!empty($nature) && !empty($date_arrivee) && !empty($date_expiration) && !empty($referance) && !empty($source) && !empty($destination) && !empty($objet) && //!empty($traitement)){
    $target_dir = "scanned/";
    $imageName = $_FILES['imageUpload']['name'];
    $tmp_name = $_FILES['imageUpload']['tmp_name'];
    move_uploaded_file($tmp_name, $target_dir.$imageName);
        require_once('/db.php');
        require_once('/courrierFonction.php');
        $result = add_courrier($referance, $date_arrivee, $date_expiration, $source, $destination, $objet, $imageName, $nature, $traitement);
        if($result)
            die('Success');
        else
            die('Failure');
}
?>
