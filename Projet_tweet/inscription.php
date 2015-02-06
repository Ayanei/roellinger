<?php  

include("header.php"); 
include("model/user.php");

if(isset($_POST['submit1'])){

$inscription = new user();
$inscription->inscription($_POST['login'], $_POST['nom1'], $_POST['mail1'], $_POST['mdp1']);

}
?>
<div id="header" >

<span><a href="index.php"><img style="margin-left:550px" src="images/icone.png" alt="touitteur" width="50" height="50"/></a></span>

</div>


<div id="corps" >


<h2>Rejoignez Twitter aujourd'hui.</h2><br>
<form id="lol" action="inscription.php" method="post">

<label for="nom" class="grand2">Nom complet</label><br>
<input class="grand1" type="texte" name="nom1" placeholder="Rentrez votre nom entier" /><br>
<span class = "grand3"></span>
<span class = "grand4"></span>

<label for="nom" class="grand2">Adresse email</label><br>
<input class="grand1" type="texte" name="mail1" placeholder="Rentrez votre adresse mail" /><br>
<span class = "grand3"></span>
<span class = "grand4"></span>


<label for="nom" class="grand2">Creez un mot de passe</label><br>
<input class="grand1"  ype="password" name="mdp1"  placeholder="Rentrez votre mot de passe" /><br>
<span class = "grand3"></span>
<span class = "grand4"></span>


<label for="nom" class="grand2">Choisissez votre nom d'utilisateur</label><br>
<input class="grand1"  ype="password" name="login"  placeholder="Rentrez pseudo" /><br>
<span class = "grand3"></span>
<span class = "grand4"></span>
<input type="submit" name="submit1" id="submit1" />

</form>

<p class="lol2">En vous inscrivant, vous acceptez les Conditions d'utilisation et la Politique de confidentialité, notamment l'utilisation de cookies. D'autres utilisateurs pourront vous trouver grâce à votre email ou votre numéro de téléphone s'ils sont renseignés.</p>
<p class="lol2"><u><b>Vous avez deja un compte ? </b></u><a href="co.php" >Connexion</a></p>
</div>
<script src = "jquery.js" type = "text/javascript"></script>
<script src = "inscription.js" type = "text/javascript"></script>