<?php
    
    $bdd= new PDO("mysql:host=localhost; dbname=ecole; charset=utf8", "root", "");

    $nomelev=$_POST['nom'];
    $prelev=$_POST['prenom'];
    $datenais=$_POST['date'];
    $lieunais=$_POST['lieu'];
    $adres=$_POST['adresse'];
    $sexe=$_POST['sexe'];
    $classelev=$_POST['idclasse'];



    $rec=$bdd->query("INSERT INTO eleve values('','".$nomelev."','".$prelev."','".$datenais."','".$lieunais."'
    ,'".$adres."','".$sexe."','".$classelev."')");

    if($rec){
        $mes="leleve a ete bien inscrit";
    }
    else{
        $mes="Erreur dinsertion";
    }
    ?>

    <html>
<head>
    <title></title>
    
</head>
<body>
    <h1>Insertion</h1>
    <?php echo $mes ?>
</body>
</html>