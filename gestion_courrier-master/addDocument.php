<?php
		echo '<!DOCTYPE html>
<html>
	<head>
		<title>ajouter document</title>
		<link rel="stylesheet" type="text/css" href="css/style_adddocument.css">
		<script>
			function getTheRightDiv(div){
				if(div==Courrier)

			}
		</script>
	</head>
	<body>
		<div id="container_div">
		<form><div class="form_input_div">
				<select id="document_type_id" name="document_type" onkeyup="getTheRightDiv(this.value)">
					<option value="volvo" selected="">type document...</option>
  					<option value="volvo">Courrier</option>
  					<option value="saab">Dossier</option>
				</select>
			</div>';

			$Dossier='<div class="form_input_div">
				<select id="document_type_id" name="document_type" onkeyup="">
					<option value="volvo" selected="">type Dossier...</option>
  					<option value="volvo">bon de commande</option>
  					<option value="saab"></option>
				</select>
			</div>';

			$Courrier='<div class="form_input_div">
				<select id="document_type_id" name="document_type" onkeyup="">
					<option value="volvo" selected="">type Courrier...</option>
  					<option value="volvo">interne</option>
  					<option value="saab">externe</option>
				</select>
			</div>';


			echo'
		</form>
		</div>
	</body>
</html>';

		?>
			