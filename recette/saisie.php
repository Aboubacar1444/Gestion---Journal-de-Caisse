<?php 
	require_once ('controller/connexion.inc.php');
	include('modele/config.php');
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/x-icon" href="image/LOGO-SIMPA_SAMARA.png">
	<link rel="stylesheet" href="css/style.css" media="screen">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/print.css" media="print">

	<script src="js/style.js"></script>

	<title>Pièce de caisse - Récette</title>
	
</head>
<body>
	<div class="container-fluid ">
		<div class="row">
			<div class=" col-lg-12"><img src="image/LOGO-SIMPA_SAMARA.png" alt="logo SIMPA SAMARA" class="flex" width="100">
			</div><hr>
			<div class=" flex col-lg-12">
					<h4 class="flex ">SAMARA - SOCIETE SARDINIERE MAROCAINE</h4>
			</div>	
		</div>
		<hr>
		<div class="row">
			<div class="col-lg-12">
				<table class="table">
					<tr>
						<td style="border: none !important;"><h6>Siège/Head office: 16, Rue Tinghirt, Roches Noires,<br>BP, 3066, Casablanca - Maroc <br>Tél:+212 5 22 24 19 09 <br>Fax: +212 5 22 24 18 49</h6></td>
						<td class="float-right" style="border: none !important;"><h6>Usine/factory: Quartier Industriel d'Essouira,<br>Essouira - Maroc <br>Tél: +212 5 24 78 34 01<br> Fax: +212 5 24 47 62 32</h6></td>
					</tr>
				</table>
			</div>
		</div>
	
	
		<div class="row">
			<div class="col-lg-12 flex ">
				<h2 class="soulign">Pièce de caisse - Récette</h2>
			</div>
		</div>
	</div>
	<hr><br>
	<div class="container-fluid ">
		<div class="row">
			<div class="flex col-lg-6">
				<form action="" method="post" class="form-control form-group ">
					<h4 class="flex">Saisie des informations</h4><hr>
					<input type="text" name="ref" required placeholder="Pièce N°..." class="form-control" autofocus><br>
					
					<input type="date" name="date"  required class="form-control" placeholder="jj/mm/aaaa" maxlength="10"><br>
					
					<input type="text" name="mt" placeholder="Montant en chiffre" id='t' required class="form-control"><br>
					
					<textarea name="lib" id="lib" cols="30" rows="3" placeholder="libellé de l'opération" required class="form-control"></textarea><br>
					
					<textarea name="mtlettre" id='lettres' cols="30" rows="3" required placeholder="Arrêtée la présente pièce de caisse de Récette à la somme de :" class="form-control" readonly>&nbsp</textarea><hr>
					
					<div class="col-lg-12  flex">
						<div class="col-lg-4 d-inline flex">Accord direction <br>
							<input type="checkbox" name="direction" value="OK" class="form-control flex" required>
						</div>
						<div class="col-lg-4  d-inline 	flex">Caissier(e)<br>
							<input type="checkbox" name="caisse" class="form-control" value="OK">
						</div>
						<div class="col-lg-4  d-inline 	flex">Le bénéficiaire
							<input type="checkbox" name="benef" placeholder="bénéficiaire" class="form-control flex" required value="OK">
						</div>
					</div>
					<hr>
					<input type="submit" name="add" value="Enregistrer" class="form-group btn btn-primary col-lg-4">
					<a href="index.php" class="form-group btn btn-dark col-lg-4">Accueil</a>
					<a href="imprim.php" class="form-group btn btn-warning col-lg-4" title="Avant d'imprimer, enrégistrez d'abord dans la base de données.">Imprimer</a>
				</form>

			</div>
		</div>
	</div>
	
	<div class="footer">
		
			
				<div class="col-lg-12 flex">
					<div class="col-sm-6">
						<h5 class="size flex">Copyright © 2018. Togola Aboubacar / Toumba Andrez</h5>
					</div>
					<div class=" col-sm-6">
						<h5 class="size flex">All right reserved.</h5>
					</div>
				</div>
			
	</div>











<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</body>
</html>