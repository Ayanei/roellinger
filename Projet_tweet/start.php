<?php
include("header.php");
include("model/user.php");

?>

<body style="background:#e1e8ed">

<div id="header1" >
<div id="corps4">
<table>
<tr><td><span><img src="images/icone1.png" alt="touitteur" width="40" height="40"/></span></td>
<td><span class="etape">Etape 1 sur 4</span></td></tr>
</table>
</div>
</div>

<div id="corps2" >

<div id="leftstart">
<p class="ahah">Nous sommes ravis de vous accueillir, <?php echo $_SESSION['nom'] . "."; ?> </p>
<p class="ahah1">Twitter est un flux constamment mis à jour qui reprend les actualités les plus cools et les plus importantes, notamment dans le domaine des médias, des sports, de la télévision, sans oublier les conversations — le tout personnalisé spécialement à votre attention.
<br><br>
Dites nous ce que vous aimez et nous vous accompagnerons durant votre installation.</p>
<a href="select_interests.php?id=<?php echo $_COOKIE['userid']; ?>"><button id="submit5">C'est parti !</button></a>
</div>

<div id="rightstart">

<img  class="coté" src="images/chien.jpg"/>
<img class="coté1" src="images/foot.jpg"/>
<img class="coté2" src="images/paysage.jpg"/>
<img class="coté3" src="images/neige.jpg"/>

</div>

</div>



</body>
</html>