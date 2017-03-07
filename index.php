<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


 <form action="result.php" method="post" name="formulaire">
 	<tr>
 		<td colspan="3">Envoyer un message</td>
 	</tr>
 	<tr>
 		<td><div align="left">Votre nom :</div></td>
 		<td colspan="2"><input type="text" name="nom" size="45" maxlength="100"></td>
 	</tr>
 	<tr>
		<td width="17%"><div align="left">Prénom :</div></td>
		<td colspan="2"><input type="text" name="prenom" size="45" maxlength="100"></td>
 	</tr>
 	<tr>
 		<td><div align="left">age : </div></td>
		<td colspan="2"><input type="number" name="age" size="45" maxlength="120"></td>
	</tr>
 	<tr>
 		<td><div align="left">langage : </div></td>
		<td colspan="2">
			<SELECT name="langage" size="1">
				<OPTION>js 
				<OPTION>ruby
				<OPTION selected>php
				<OPTION>csss
			</SELECT>
	</tr>
 	<tr>
 		<td width="42%">
 			<center>
 			<input type="reset" name="Submit" value="Réinitialiser le formulaire">
 			</center>
 		</td>
 		<td width="41%">
 			<center>
 			<input type="submit" name="Submit" action="result.php" value="Envoyer">
 			</center>
 		</td>
 	</tr>					
 </form>
<?php

// Connexion à la base de données


    $bdd = new PDO('mysql:host=localhost;dbname=formulaire_ex;charset=utf8', 'root', 'root');



$reponse = $bdd->query('SELECT prenom, age, nom, langage FROM form ORDER BY ID DESC LIMIT 0, 10');


// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

while ($donnees = $reponse->fetch())

{

    echo '<p>Nom : ' . htmlspecialchars($donnees['nom']) . ' prenom :  ' . htmlspecialchars($donnees['prenom']) . ' age :  ' . $donnees['age'] . ' langage : ' . htmlspecialchars($donnees['langage']) . '</p>';

}


$reponse->closeCursor();


?>
</body>
</html>