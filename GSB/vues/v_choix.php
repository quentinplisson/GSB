<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");

if ($_SESSION['profil'] == 'Visiteur') {
    $info = $pdo->getInfosVisiteur($_SESSION['login'], $_SESSION['mdp'] );
} else{
    $info = $pdo->getInfosComptable($_SESSION['login'], $_SESSION['mdp'] );
}
$id_co = $info[0];
$nom_co = $info[1];
$prenom_co = $info[2];
echo "<H2> Bonjour ".$nom_co." ".$prenom_co."<br> Votre ID est : ".$id_co . "</H2>";

?>
<br>
<a href="./controleurs/c_choixgererFrais.php"><H2 > Cliquer ici pour gerer vos frais </h2></a>
<a href="./controleurs/c_choixetatFrais.php"><h2> Cliquer ici pour voir l'etat de vos frais </h2></a>
<br><br>
<a href="./controleurs/deconexion.php"> Deconexion </a>
