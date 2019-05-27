<?php

//OUVERTURE D4UNE CONNEXION 0 LA BD
$bdd = new PDO("mysql:host=localhost;dbname=ecole; charset=utf8",'root','');

//preparation dela requete de suprression
$rec = $bdd -> prepare('DELETE FROM eleve WHERE idelev=:num LIMIT 1');

//liaison du parametre nommé
$rec ->bindValue(':num',$_GET['numEleve'], PDO::PARAM_INT);

//eXCECUTION DE LA REQUETE

$proud = $rec -> execute();

if($proud){

	$mes = " la classe a ete supprimé de la base de donnees ";

}
else
{

		$mes = " Echec de suppression classe ";

}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>Suppression D'une classe</h1>
	<p><?php echo $mes; ?></p>
</body>
</html>