<?php



//OUVERTURE D4UNE CONNEXION 0 LA BD
$bdd = new PDO("mysql:host=localhost; dbname=ecole; charset=utf8",'root','');

//preparation dela requete de modification
$rec = $bdd -> prepare('UPDATE eleve set nomelev=:nomelev, prelev=:prelev, datenais=:datenais, 
	lieunais=:lieunais, adres=:adres, sexe=:sexe, classelev=:classelev WHERE idelev=:num');

	$rec ->bindValue(':num',$_POST['numEleve'], PDO::PARAM_INT);
	$rec ->bindValue(':nomelev',$_POST['nom'], PDO::PARAM_STR);
	$rec ->bindValue(':prelev',$_POST['prenom'], PDO::PARAM_STR);
	$rec ->bindValue(':datenais',$_POST['date'], PDO::PARAM_STR);
	$rec ->bindValue(':lieunais',$_POST['lieu'], PDO::PARAM_STR);
	$rec ->bindValue(':adres',$_POST['adresse'], PDO::PARAM_STR);
	$rec ->bindValue(':sexe',$_POST['sexe'], PDO::PARAM_STR);
	$rec ->bindValue(':classelev',$_POST['classelev'], PDO::PARAM_STR);
	
$ok=$rec ->execute();
if($ok){

	$mes = " linscription de leleve a ete revu ";

}
else
{

	$mes = " Echec de mise a jour ";

}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>RESULTAT de la modification </h1>
	<p><?php echo $mes; ?></p>
</body>
</html>