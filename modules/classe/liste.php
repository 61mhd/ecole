<?php

//OUVERTURE D4UNE CONNEXION 0 LA BD
$bdd = new PDO("mysql:host=localhost;dbname=ecole; charset=utf8",'root','');

//preparation dela requete d'affichage des classes
$rec = $bdd -> prepare("SELECT * FROM classe");

//Execution de la requete
//DANS ce cas on aura pas besoin de liaison car il ne sagit pas d'une reception de dnnées pour la base
//Par consequent la mehode BindValue nest pas appelé
$proud = $rec -> execute();

//recuperation des resultats dune requete
// dAns cette mehode tous les resultats vont etre recuperer en une seule fois grace a la mehode fetchALL
$class = $rec -> fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Liste des classes </h1>
	

		<table border="1px" style="width:50%">
			<tr><th>IdClasse</th><th>Classe</th><th>Actions</th></tr>
	 
		<?php  foreach($class as $classe)
				{
					echo "<tr>
						<td>".$classe['idcl']."</td><td>" .$classe['nomcl']. "</td>
						<td>
							<a href='./exe/delclasse.php?numClasse=" .$classe['idcl']. " '>Supprimer</a>
							<a href='./exe/formclas.php?numClasse=" .$classe['idcl']. " '>Modifier</a>
						</td></tr>";
				
				 

				}

		 ?>		   

				
		
		
	
</table>
</body>
</html>