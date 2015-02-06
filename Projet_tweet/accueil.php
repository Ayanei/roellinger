<?php
include("model/user.php");


if(isset($_POST['deco'])){
$accueil = new user();
$accueil->deconnexion($_POST['deco']);
}
?>


<form action="accueil.php" method="post">

<input type="submit" name="deco" />


</form>