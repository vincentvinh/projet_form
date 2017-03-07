<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<?php
//echo "Prénom tapé par l'utilisateur : ".$_POST['prenom'] . "<br>";
//echo "nom tapé par l'utilisateur : ".$_POST['nom'] . "<br>";
//echo "age tapé par l'utilisateur : ".$_POST['age'] . "<br>";
//echo "langage tapé par l'utilisateur : ".$_POST['langage'] . "<br>";


// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=formulaire_ex;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['age']))
{
	echo "remplir les champs"; ?>
	<center>
 			<input type="submit" name="Submit" action="index.php" value="Envoyer">
 	</center>

	<?php
}
else
{
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO form (nom, prenom, age, langage) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['langage']));
header('Location: index.php');
}
?>
</body>
</html>