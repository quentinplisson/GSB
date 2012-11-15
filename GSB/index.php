<?php
session_start();
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ; 								// Creer la vue v_entete.php 
$pdo = PdoGsb::getPdoGsb();

if($_SESSION['uc']==NULL || $_SESSION['login']==NULL){
     $_SESSION['uc'] = 'connexion';
}
$uc = $_SESSION['uc'];
switch($uc){
                  case 'choix':{
                      include("controleurs/c_menu.php");break;
                  }
                  
	case 'connexion':{
                    include("controleurs/c_connexion.php");break;	// Creer le contrôleur c_connexion.php
                    
               
        }
	case 'gererFrais' :{
                        
		include("controleurs/c_gererFrais.php");break;	// Creer le controleur c_gererFrais.php
	}
	case 'etatFrais' :{
                        
		include("controleurs/c_etatFrais.php");break; 	// Creer le contrôleur c_etatFrais.php
	}
}

include("vues/v_pied.php") ;									// Creer la vue v_pied.php
?>

