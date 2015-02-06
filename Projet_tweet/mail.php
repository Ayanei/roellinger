<?php  include("header.php"); 
include("model/user.php");

if(isset($_POST['submit'])){

$mail = new user();
$mail->confirmMail($_POST['mail']);
}

?>

<div id="header" >

<span><a href="index.php"><img style="margin-left:550px" src="images/icone.png" alt="touitteur" width="50" height="50"/></a></span>

</div>


<div style="padding-bottom:20px" id="corps" >


<h2>Confirmation de mail</h2>
<p class="cfmail" >Afin de protéger la sécurité de votre compte, veuillez ajouter votre numéro de téléphone. Nous vous enverrons un SMS avec un code de vérification que vous devrez entrer à la page suivante.</p>
<form   id="lol" action="mail.php" method="post">

<input class="grand" type="texte" name="mail" placeholder="Rentrez votre adresse mail" /><br>
<input type="submit" name="submit" id="submit4" value="Verifier votre adresse mail"/>

</form>
<p class="cfmail" >Remarque : Votre numéro de téléphone ne sera pas visible publiquement. D'autres utilisateurs pourront vous retrouver grâce à celui-ci, mais vous pouvez changer vos paramètres de confidentialité à tout moment. Des frais standards de SMS peuvent vous être facturés en fonction de votre opérateur.</p>

</div>