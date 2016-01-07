{if isset($connect_echec)}
    <div class="alert alert-success" id="notif">
        {$connect_echec}
        </div>
    {/if}    

<h1> Connexion Utilisateur </h1>
<p> Saissiez votre E-mail et mot de passe<p>
<form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion" name="form_connexion">

    <div class="clearfix">
        <label for="email">Email: </label>
        <div class="input">
            <input type="text" name="email" id="email" value=""/>
        </div>
    </div>
    <div class="clearfix">
        <label for="mdp">Mot de Passe: </label>
        <div class="input">
            <input type="password" name="mdp" id="mdp"/>
        </div>
    </div>        
    <div class="form-actions">
        <input type="submit" name="connect" value="connectez-vous" class="btn btn-large btn-primary"/>
    </div>
</form>    