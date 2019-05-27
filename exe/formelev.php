<?php



//OUVERTURE D4UNE CONNEXION 0 LA BD
$bdd = new PDO("mysql:host=localhost;dbname=ecole; charset=utf8",'root','');

$rec = $bdd -> prepare('SELECT * FROM eleve WHERE idelev=:num');

//liaison dumarqueur avec le paremtre numproduit suivi de la precision du type
$rec ->bindValue(':num',$_GET['numEleve'], PDO::PARAM_INT);

//execution du resultat
$proud = $rec -> execute();

//recuperation de la valeur
$eleve = $rec -> fetch();


?>	
<!DOCTYPE html>
<html>
<head>

</head>
<body>

			<h1>MODIFIER un eleve</h1>
	     <form action="upeleve.php" method="POST" enctype=" ">
			<input type="hidden" name="numEleve" class="form-control" value="<?=$eleve['idelev'] ?>"><br><br>
			<label>Nom Eleve: </label>
			<input type="text" name="nom" class="form-control" value="<?=$eleve['nomelev'] ?>"><br><br>
			<label>Prenom Eleve: </label>
			<input type="text" name="prenom" class="form-control" value="<?=$eleve['prelev'] ?>"><br><br>
			<label>DateNais Eleve: </label>
			<input type="date" name="date" class="form-control" value="<?=$eleve['datenais'] ?>"><br><br>
			<label>Lieunais Eleve: </label>
			<input type="text" name="lieu" class="form-control" value="<?=$eleve['lieunais'] ?>"><br><br>
			<label>Adresse Eleve: </label>
			<input type="text" name="adresse" class="form-control" value="<?=$eleve['adres'] ?>"><br><br>
			<label>Sexe Eleve: </label>
			<input type="text" name="sexe" class="form-control" value="<?=$eleve['sexe'] ?>"><br><br>
			<label>Classe Eleve: </label>
			<input type="text" name="classelev" class="form-control" value="<?=$eleve['classelev'] ?>"><br><br>
			
			<input type="Submit" name="CONNEXION" class="btn btn-primary" value="Enregistrer Modification "/><br>
		
		</form>
</table>
</body>
</html>