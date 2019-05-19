<?php
initPanier();
$action = $_REQUEST['action'];
switch($action)
{
	case 'voirCategories':
  		$lesCategories = getLesCategories();
		include("vues/v_categories.php");
  		break;
	case 'voirMedicaments' :
		$lesCategories = getLesCategories();
		include("vues/v_categories.php");
  		$idCategorie = $_REQUEST['idCategorie'];
		$lesMedicaments = getLesMedicaments($idCategorie);
		include("vues/v_medicaments.php");
		break;
	case 'voirMedicamentsEtAjouterAuPanier' :
		$lesCategories = getLesCategories();
		include("vues/v_categories.php");
  		$idCategorie = $_REQUEST['idCategorie'];
		$lesMedicaments = getLesMedicaments($idCategorie);
		include("vues/v_medicaments.php");
		$idMedicament=$_REQUEST['idMedicament'];
		$quantite=$_REQUEST['quantite'];
	  	ajouterAuPanier($idMedicament,$quantite);
		break;
}
?>

