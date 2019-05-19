<?php
require_once("class/panier.inc.php");
require_once("class/medicament.inc.php");
require_once("class/categorie.inc.php");
include("util/fonctions.php");
session_start();
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;
if(!isset($_REQUEST['uc'])) {
     $uc = 'accueil';
}
else {
    $uc = $_REQUEST['uc'];
}
switch($uc)
{
	case 'accueil': 
					include("vues/v_accueil.php");
					break;
	case 'voirMedicaments' :
					include("c_voirMedicaments.php");
					break;
	case 'gererPanier' :
					include("c_gestionPanier.php");
					break; 
	case 'administrer' :
					include("c_gestionMedicaments.php");
					break; 
}
include("vues/v_pied.php") ;
?>

