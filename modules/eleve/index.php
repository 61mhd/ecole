<?php
$p=isset($_GET["c"])? $_GET["c"]:'Ajouter';
switch($p)
{
        case"Ajouter":include("modules/eleve/add.php");
        break;
        case"Lister":include("modules/eleve/liste.php");
        break;
        default: echo("Page inexistance");
}
?>