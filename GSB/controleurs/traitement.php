<?php

session_start();
/* * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    $login = $_POST['id'];
    $mdp = $_POST['mdp'];
    $profil = $_POST['profil'];
    
   //identifictaion
    $hote = "192.168.104.107";
    $user = "test";
    $mdp_db = "test";

    $connect = mysql_connect($hote,$user,$mdp_db);

    //Selection base de donnée
    $BDD= "gsb";
    mysql_select_db($BDD, $connect); 

    

      if ($login==NULL OR $mdp==NULL){
        if ($login == NULL AND $mdp != NULL){ 
            echo "Veuillez saisir un login. Redirection en cours...";
            echo '<meta http-equiv="refresh" content="1; URL=../index.php">';
        }
        if ($mdp == NULL AND $login != NULL){ 
            echo "Veuillez saisir un mot de passe. Redirection en cours...";
            echo '<meta http-equiv="refresh" content="1; URL=../index.php">';
        }
         if ($login==NULL AND $mdp==NULL){
            echo "Veuillez remplir tout les champs. Redirection en cours...";
            echo '<meta http-equiv="refresh" content="1; URL=../index.php">'; 
        }
    } else {
    // Les champs sont bien rempli, verification du login
        $requete = "Select * FROM ".$profil." WHERE login='".$login."';";
        $result = mysql_query($requete);

    $ligne = mysql_fetch_row($result);

        //Login present, verification du mot de passe
        if ($ligne[1] != NULL) {
            $requete = "Select * FROM ".$profil." WHERE login='".$login."' AND mdp='".$mdp."' ;";
            $result = mysql_query($requete);
            $ligne = mysql_fetch_row($result);
            
            // Login et mot de passe corret  
            if ($ligne[1] != NULL) {
                
                $_SESSION['login'] = $login;
                $_SESSION['mdp']=$mdp;   
                

               echo '<meta http-equiv="refresh" content="0; URL=../controleurs/c_choix.php">'; 
            } else {
            //Bon login mais mauvais mot de passe, redirection + compteur              
                echo "  Mot de passe incorrect. Redirection en cours...";
                echo '<meta http-equiv="refresh" content="1; URL=../index.php">';            
            }
        //Mauvais login, redirection + conmpteur            
        } else {
            echo "Identifiant incorrect.Redirection en cours...";
            echo '<meta http-equiv="refresh" content="1; URL=../index.php">'; 
        }
    }
?>
