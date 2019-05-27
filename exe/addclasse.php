<?php
    
    $bdd= new PDO("mysql:host=localhost; dbname=ecole; charset=utf8", "root", "");

    $nomcl=$_POST['classe'];

    $rec=$bdd->query("INSERT INTO classe values('','".$nomcl."')");

    if($rec){
        $mes="la classe a ete ajoutee";
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