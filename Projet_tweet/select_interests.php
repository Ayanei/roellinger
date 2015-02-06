<?php
include("header.php");
include("model/user.php");

if(isset($_POST['continue'])){
$select = new user();
$select->interestUser();
}
?>

<body style="background:#e1e8ed">

<div id="header1" >
<div id="corps4">
<table>
<tr><td><span><img src="images/icone1.png" alt="touitteur" width="40" height="40"/></span></td>
<td><span class="etape">Etape 2 sur 4</span></td></tr>
</table>
</div>
</div>

<div id="corps2" >

<div id="leftstart1">

<h3 class="ahah2">Qu'est-ce qui vous intéresse ?</h3>
<p class="ahah2">Sélectionnez une ou plusieurs des options ci-dessous et nous vous suggérerons du contenu qui pourrait vous intéresser.</p>

<form action="select_interests.php" method="post" >

<ul>
<li><input type="checkbox" name="inbox[]" class="inbox" value="Comptes populaires"/></li><li><label>Comptes populaires</label></li><br>
<li><input type="checkbox" name="inbox[]" class="inbox" value="Sports"/></li><li><label>Sports</label></li><br>
<li><input type="checkbox" name="inbox[]" class="inbox" value="Associations et Caritatif"/></li><li><label>Associations et Caritatif</label></li><br>
<li><input type="checkbox" name="inbox[]" class="inbox" value="Technologie</"/></li><li><label>Technologie</label></li><br>
<li><input type="checkbox" name="inbox[]" class="inbox" value="Art, Mode et Design"/></li><li><label>Art, Mode et Design</label></li><br>
<li><input type="checkbox" name="inbox[]" class="inbox" value="Culture"/></li><li><label>Culture</label></li><br>
<li><input type="checkbox" name="inbox[]" class="inbox" value="Musique"/></li><li><label>Musique</label></li><br>
<li><input type="checkbox" name="inbox[]" class="inbox" value="Humour"/></li><li><label>Humour</label></li><br>
<li><input type="checkbox" name="inbox[]" class="inbox" value="Politique"/></li><li><label> Politique</label></li><br>
<li><input type="checkbox" name="inbox[]" class="inbox" value="TV"/></li><li><label>TV</label></li><br>


</div>

<div id="rightstart1">

<input type="submit" value="Continuer" name="continue" id="submit6"/>

</div>
</form>
</div>



</body>
</html>