<?php


if (is_numeric($_GET['id'])) 
{

include "modele/connexion.php";
$id = $_GET['id'];

$query = $bdd->query('SELECT * FROM form WHERE id = $id ');?>


<?php include "include/header.php"; ?>

 <form action="edit.php?id=<?php echo $donnee['id']; ?>"" method="post" name="formulaire">
 	<tr>
 		<td colspan="3">Envoyer un message</td>
 	</tr>
 	<tr>
 		<td><div align="left">Votre nom :</div></td>
 		<td colspan="2"><input type="text" name="nom" size="45" maxlength="100" placeholder="<?php $query['nom'] ?>"></td>
 	</tr>
 	<tr>
		<td width="17%"><div align="left">Prénom :</div></td>
		<td colspan="2"><input type="text" name="prenom" size="45" maxlength="100" placeholder="<?php $query['prenom']?>"></td>
 	</tr>
 	<tr>
 		<td><div align="left">age : </div></td>
		<td colspan="2"><input type="number" name="age" size="45" maxlength="120" placeholder="<?php $query['age']?>"></td>
	</tr>
 	<tr>
 		<td><div align="left">langage : </div></td>
		<td colspan="2">
			<SELECT name="langage" size="1" placeholder="<?php $query['langage']?>">
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
 			<input type="submit" name="Submit" action="edit" value="Envoyer">
 			</center>
 		</td>
 	</tr>					
 </form>
<?php

$query->closeCursor();

header('Location: tableau.php');

}
	

else
{
	echo "id n'est pas un nombre";
}
