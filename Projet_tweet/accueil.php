<?php
include("model/user.php");

$accueil = new user();
if(isset($_POST['deco'])){

$accueil->deconnexion($_POST['deco']);
}

// hello

$accueil1 = $accueil->activate();

if(isset($_SESSION['nom'])){

foreach($accueil1 as $v){ 

if($v['activate'] == 1) {

?>

<form action="accueil.php" method="post">

<input type="submit" name="deco" />


</form>

<?php  

} else {

header("location: start.php");

} } }else {

header("location: index.php");

} ?>
