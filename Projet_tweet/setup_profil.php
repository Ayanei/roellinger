<?php
include("header.php");
include("model/user.php");


$follow = new user();
$data = $follow->getProfilUser();

if(isset($_POST['continue1'])){

$follow->ajoutPhotoUser();

}

?>

<body style="background:#e1e8ed">

<div id="header1" >
<div id="corps4">
<table>
<tr><td><span><img src="images/icone1.png" alt="touitteur" width="40" height="40"/></span></td>
<td><span class="etape">Etape 4 sur 4</span></td></tr>
</table>
</div>
</div>

<center><div id="corps2">

<div id="leftstart1">

<h3 class="ahah2">Choisir une photo.</h3>
<p class="ahah2">Vous serez en mesure de compléter votre profil ultérieurement.</p>

<div id="photo" >
<div id="photo1">

</div>

<div id="photo2">
<img src="images/noavatar.gif" width="120" height="120"/>
</div>
<?php foreach($data as $v) { ?>
<p class="profil"><?php echo $v['fullname']; ?></p>
<p class="profil"> <?php echo $v['mail']; ?></p>
<?php } ?>
<form action="setup_profil.php" method="post" enctype="multipart/form-data">

<input type="file" name="avatar" id="avatar" />

</div>
</div>
<div id="rightstart1">

<input type="submit" value="Continuer" name="continue1" id="submit6"/>
</form>
</div>
</div></center>
<script src = "jquery.js" type = "text/javascript"></script>
<script src = "inscription.js" type = "text/javascript"></script>