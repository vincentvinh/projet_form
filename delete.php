<?php


if (is_numeric($_GET['id'])) 
{

include "modele/connexion.php";

$query = $bdd->prepare('DELETE FROM form WHERE id = ? ');

$query->execute(array($_GET['id']));

$query->closeCursor();

header('Location: tableau.php');

}
	
 

else
{
	echo "id n'est pas un nombre";
}
