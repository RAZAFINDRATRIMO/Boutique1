<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'voirPanier':
		$lesMedicaments = getLesMedicamentsDuPanier();
		$lesQuantites = getLesQuantitesDuPanier();
		include("vues/v_panier.php");
		break;
	case 'supprimerUnMedicament':
		$idMedicament=$_REQUEST['medicament'];
		retirerDuPanier($idMedicament);
		$lesMedicaments = getLesMedicamentsDuPanier();
		$lesQuantites = getLesQuantitesDuPanier();
		include("vues/v_panier.php");
		break;
	case 'passerCommande' :
			$idPharmacien ='';
			include ("vues/v_commande.php");			
		break;
	case 'confirmerCommande'	:	
			$idPharmacien =$_REQUEST['idPharmacien'];
			include ("vues/v_commande.php");
			// $msgErreurs = getErreursSaisieCommande($cp,$mail);
			// if (count($msgErreurs)!=0)
			// 	include ("vues/v_erreurs.php");
			// else {
			creerCommande($idPharmacien);
			echo "La commande est prise en compte";
			
		break;	
}
?>


