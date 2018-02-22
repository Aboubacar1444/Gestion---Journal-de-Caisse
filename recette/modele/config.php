<?php require_once ('controller/connexion.inc.php');
if(isset($_POST['add']))
{
			$ref=htmlspecialchars($_POST['ref']);
		$date=htmlspecialchars($_POST['date']);
		$mt=htmlspecialchars($_POST['mt']);
		$lib=htmlspecialchars($_POST['lib']);
		$mtlettre=htmlspecialchars($_POST['mtlettre']);
		$direction=htmlspecialchars($_POST['direction']);
		$caisse=htmlspecialchars($_POST['caisse']);
		$benef=htmlspecialchars($_POST['benef']);
		if(!empty($ref) AND !empty($date) AND !empty($mt) AND !empty($lib) AND !empty($mtlettre) AND !empty($direction) AND !empty($caisse) AND !empty($benef))
			{
				$req=$connexion->prepare("INSERT INTO recette(ref_r,datee_r,mtchiffre_r,libelleop_r,mtlettre_r,signdirection_r,caissier_r,benef_r) VALUES(?,?,?,?,?,?,?,?)");
				$req->execute(array($ref,$date,$mt,$lib,$mtlettre,$direction,$caisse,$benef));
				$req1=$connexion->prepare("INSERT INTO relationr(refrecette)VALUES(?)");
				$req1->execute(array($ref));
				$f=$req->rowCount();
				$f2=$req1->rowCount();
				if($f==1 AND $f2==1)
				{
					echo"Enrégistrement effectué avec succès";
				}
			else{
				echo"la valeur existe déjà ou l'enregistrement a échoué";
				}
			}
			else{
				echo"Remplissez tous les champs de saisie";
				}
}
?>