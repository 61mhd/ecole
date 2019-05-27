<?php



//OUVERTURE D4UNE CONNEXION 0 LA BD
$bdd = new PDO("mysql:host=localhost;dbname=ecole; charset=utf8",'root','');

//preparation dela requete de modification
$rec = $bdd -> prepare('UPDATE classe set nomcl=:nomcl WHERE idcl=:num');

	$rec ->bindValue(':num',$_POST['numClasse'], PDO::PARAM_INT);
	$rec ->bindValue(':nomcl',$_POST['nom'], PDO::PARAM_STR);
	

	$ok=$rec->execute();

if($ok){

	$mes = " la classe a ete mise a jour ";

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