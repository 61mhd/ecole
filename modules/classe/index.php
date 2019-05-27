<?php
$p=isset($_GET["c"])? $_GET["c"]:'Ajouter';
switch($p)
{
        case"Ajouter":include("modules/classe/add.php");
        break;
        case"Lister":include("modules/classe/liste.php");
        break;
        default: echo("Page inexistance");
}
?>