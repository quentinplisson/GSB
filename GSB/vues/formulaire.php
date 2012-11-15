
	
<div id="menuDroite">
    <br/>
    <h2>Authentification</h2>
    <br/>
    <h3> Se connecter en tant que : </h3>
    
    <form id="traitement" action="./controleurs/traitement.php" method="POST"/>
    <input type="radio" name="profil" value="Visiteur" id="visiteur" checked="checked"/>
    <label for ="visiteur"> Visiteur </label>
    <input type="radio" name="profil" value="Comptable" id="comptable"/>
    <label for ="comptable"> Comptable </label>
    <br><br/>
    <label for="id">Identifiant</label>
    <input type="text" name="id" id="id" /><br/>
    <label for="mdp"> Mot de Passe </label>
    <input type="text" name="mdp" id="mdp" /><br/>
    <input type="submit" value="Valider"/>
    <input type="reset" value ="Effacer"/>
    


</div>

