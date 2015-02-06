<?php  include("header.php");
include("model/user.php");

if(isset($_POST['submit'])){

$inscription = new user();
$inscription->connexion($_POST['mail'], $_POST['mdp']);

}
 ?>


<div id="header" >

<span><a href="index.php"><img style="margin-left:550px" src="images/icone.png" alt="touitteur" width="50" height="50"/></a></span>

</div>


<div id="corps" >


<h2>Se connecter a Touitteur</h2>
<form id="lol" action="co.php" method="post">

<input class="grand" type="texte" name="mail" placeholder="Rentrez votre adresse mail" /><br>
<input class="grand"  ype="password" name="mdp"  placeholder="Rentrez votre mot de passe" /><br>
<input type="submit" name="submit" id="submit" />

</form>

<div id="bottom">

<p>Nouveau sur Twitter ? <a href="inscription.php">S'inscrire maintenant </a>
</div>
</div>