<?php



//OUVERTURE D4UNE CONNEXION 0 LA BD
$bdd = new PDO("mysql:host=localhost;dbname=ecole; charset=utf8",'root','');

$rec = $bdd -> prepare('SELECT * FROM classe WHERE idcl=:num');

//liaison dumarqueur avec le paremtre numproduit suivi de la precision du type
$rec ->bindValue(':num',$_GET['numClasse'], PDO::PARAM_INT);

//execution du resultat
$proud = $rec -> execute();

//recuperation de la valeur
$classe = $rec -> fetch();


?>	
<!DOCTYPE html>
<html>
<head>

</head>
<body>

			<h1>MODIFIER un classe</h1>
	     <form action="upclasse.php" method="POST" enctype=" ">
			<input type="hidden" name="numClasse" class="form-control" value="<?=$classe['idcl'] ?>"><br><br>
			<label>Nom Classe: </label>
			<input type="text" name="nom" class="form-control" value="<?=$classe['nomcl'] ?>"><br><br>

			<input type="Submit" name="CONNEXION" class="btn btn-primary" value="Enregistrer Modification "/><br>
		
		</form>
</table>
</body>
</html>