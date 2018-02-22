<?php 
	include('controller/connexion.inc.php');
	include('confimp.php');
	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" media="screen">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/print.css" media="print">
	<link rel="shortcut icon" type="image/x-icon" href="image/LOGO-SIMPA_SAMARA.png">

	<script src="js/style.js"></script>
	<title>Impression</title>

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
			<div class="col-lg-12 ">
				<table class="table">
					<tr>
						<div class="col-lg-6">
							<td style="border: none !important;"><h6>Siège/Head office: 16, Rue Tinghirt, Roches Noires,<br>BP, 3066, Casablanca - Maroc <br>Tél:+212 5 22 24 19 09 <br>Fax: +212 5 22 24 18 49</h6></td>
						
							<td class="float-right" style="border: none !important"><h6>Usine/factory: Quartier Industriel d'Essouira,<br>Essouira - Maroc <br>Tél: +212 5 24 78 34 01<br> Fax: +212 5 24 47 62 32</h6></td>
						</div>
					</tr>
				</table>
			</div>
		</div>
	<br>
	<br>
	<br>
	
		<div class="row">
			<div class="col-lg-12 flex ">
				<h2 class="soulign">Pièce de caisse - Dépense</h2>
			</div>
		</div>
	
	<br>
	<br>
	<br>
	<br>
	
	
		<div class="row">
			<table class="table">
				<tr>
					<td><div class="col-lg-6 ml-5 mr-5">
					<br><h6>Pièce N°... : <?php echo $ref; ?></h6></td>
					<td><div class="col-lg-6">
					<br><h6> Date : <?php echo $date; ?></h6>
				</div></td>
				</tr>
				</div>
			</table>
			
				<div class="col-lg-4 mb-5 ml-4">
					<h6 >Montant en chiffre: <?php echo $mt; ?> DHS</h6>
				</div>
				<div class="col-lg-8 mb-5 ml-4">
					<h6>Libellé de l'opération: <?php echo $lib; ?></h6>
				</div>
				<div class="col-lg-8 ml-4">
					<h6>Montant en lettre: <?php echo $mtlettre; ?></h6> 
				</div>

			
		</div>
		<br>
		<br>
		<br>
		<div class="row">
		    <table class="table">
		    	<tr>
		    		<td>
		    			<div class="col-md">
		    		 		<h4 class="soulign">Accord de la direction</h4>
							<p class="noimp"><?php echo $direction; ?></p>
		    		 		
		    			</div>
		    		</td>
		   			 <td>
		    			<div class="col-md">
		    		 		<h4 class="soulign">Caissier(e)</h4>
		    		 		<p class="noimp"><?php echo $caisse; ?></p>
		    			</div>
		    		</td>
				    <td>
		    			<div class="col-md ">
		    		 		<h4 class="soulign">Bénéficiaire</h4>
		    		 		<p class="noimp"><?php echo $benef; ?></p>
		    			</div>
		    		</td>
		    	</tr>
		    </table> 
  		<div class="col-lg-12 noimp flex">
  			<div class="col-lg-6 flex">
  				<button class="btn btn-outline-warning noimp" onclick="window.print()" name="imprimer">Imprimer</button>
  			</div>
  			<div class="flex col-lg-6">
  				<button onclick="window.location.href='index.php'" class="btn btn-outline-info noimp">Rétournez à l'accueil</button> 
  			</div>
  		</div>
  		</div><hr class="noimp">
  		
</div>
<div class="footer noimp">
		
			
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