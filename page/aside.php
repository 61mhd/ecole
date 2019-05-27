<?php
if(isset($_GET["j"])){
    $p=$_GET["j"];
    if($p=="eleve"){ ?>
<br><br>
<ul>
    <li><a href="./?j=eleve">Ajouter Eleve</a></li><br><br>
    <li><a href="./?j=eleve&c=Lister">Lister Eleve</a></li><br><br>
</ul>
<?php } elseif($p=="classe"){ ?>
 <br><br>
<ul>
    <li><a href="./?j=classe">Ajouter Classe</a></li><br><br>
    <li><a href="./?j=classe&c=Lister">Lister Classe</a></li><br><br>
</ul>
<?php }} ?>
