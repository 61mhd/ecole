<?php

//OUVERTURE D4UNE CONNEXION 0 LA BD
$bdd = new PDO("mysql:host=localhost;dbname=ecole; charset=utf8",'root','');

//preparation dela requete d'affichage des classes
$rec = $bdd -> prepare("SELECT * FROM eleve");

//Execution de la requete
//DANS ce cas on aura pas besoin de liaison car il ne sagit pas d'une reception de dnnées pour la base
//Par consequent la mehode BindValue nest pas appelé
$proud = $rec -> execute();

//recuperation des resultats dune requete
// dAns cette mehode tous les resultats vont etre recuperer en une seule fois grace a la mehode fetchALL
$elev = $rec -> fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Liste des eleves </h1>
	

		<table border="1px" style="width:50%">
			<tr><th>Ideleve</th><th>Nom</th><th>Prenom</th><th>Date Naissance</th><th>Lieu Naissance</th><th>adresse</th>
				<th>Sexe</th><th>ClasseEleve</th><th>Actions</th></tr>
	 
		<?php  foreach($elev as $eleve)
				{
					echo "<tr>
						<td>".$eleve['idelev']."</td><td>" .$eleve['nomelev']. "</td><td>" .$eleve['prelev']. "</td><td>" .$eleve['datenais']. "</td>
						<td>" .$eleve['lieunais']. "</td><td>" .$eleve['adres']. "</td><td>" .$eleve['sexe']. "</td>
						<td>" .$eleve['classelev']. "</td>
						<td>
							<a href='./exe/deleleve.php?numEleve=" .$eleve['idelev']. " '>Supprimer</a>
							<a href='./exe/formelev.php?numEleve=" .$eleve['idelev']. " '>Modifier</a>
						</td></tr>";
				
				 

				}

		 ?>		   

				
		
		
	
</table>
</body>
</html>