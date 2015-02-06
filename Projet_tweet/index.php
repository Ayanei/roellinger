<?php  
include("header.php"); 
include("model/user.php"); 

if(!isset($_SESSION['nom'])){
if(isset($_POST['submit1'])){

$inscription = new user();
$inscription->inscription($_POST['login'], $_POST['nom1'], $_POST['mail1'], $_POST['mdp1']);

}

if(isset($_POST['submit'])){

$inscription = new user();
$inscription->connexion($_POST['mail'], $_POST['mdp']);

}

?>
<style>
body{

background:url("images/background.jpg");
}
</style>
<body>

<div id="header" >

<span><a href="index.php"><img style="margin-left:550px" src="images/icone.png" alt="touitteur" width="50" height="50"/></a></span>

</div>

<div  id="corps1">

<div id="left">

<h2>Bienvenue sur Twitter.</h2><br>

<p class="lol3">Connectez-vous à vos amis — et d'autres personnes fascinantes. Recevez des mises à jour instantanées sur les choses qui vous intéressent. Et regardez les événements se dérouler, en temps réel, sous tous les angles.</p>

</div>

<div id="right" >

<form action="index.php" method="post" class="index">
<input type="texte" name="mail" id="mail" placeholder="Rentrer votre mail"/>
<input type="password" placeholder="Rentrer votre password" name="mdp" />
<input type="submit" name="submit" id="submit3" value="Connexion"/>

</form>

<form action="index.php" method="post" class="index1" >
<span>Nouveau sur tweeter ? <span class="gris">inscrivez vous</span></span>
<hr></hr>
<input type="texte" name="login" placeholder="Rentrer votre pseudo"/>
<input type="texte" name="nom1" placeholder="Rentrer votre nom"/>
<input type="email" name="mail1" placeholder="Rentrer votre email"/>
<input type="password" name="mdp1" placeholder="Rentrer votre password"/><br>
<input type="submit" name="submit1" id="submit2" value="Inscription"/>

</form>


</div>

</div>

</body>

<?php }else { header("location: accueil.php"); }  ?>