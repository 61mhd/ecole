 <?php
    $p = isset($_GET['j'])?$_GET['j']:"accueil";
    
    switch($p)
    {
            case"accueil": include("page/main.php");
            break;
            case"eleve": include("./modules/eleve/index.php");
            break;
            case"classe": include("./modules/classe/index.php");    
            break;
            default: echo("Page inexistante");
            break;
    }
   ?>
        