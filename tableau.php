
<?php

include "include/header.php";
include_once "modele/connexion.php"; 

$result = $bdd->query('SELECT * FROM form');
//$result = $result->fetchAll(); 
//var_dump($result);



?>

<table style="border: 1px solid black">
	<thead>
		<tr>
			<th>nom</th>
			<th>prenom</th>
			<th>age</th>
			<th>langage</th>
			<th>sup</th>
			<th>edit</th>
		</tr>
	</thead>
	<tbody>

	<?php 

	while($donnee = $result->fetch()) 
	{ ?>
	       <tr>  
                    <td><?php echo $donnee['nom']; ?></td>    
                    <td><?php echo $donnee['prenom']; ?></td>
                    <td><?php echo $donnee['age']; ?></td>
                    <td><?php echo $donnee['langage']; ?></td>
                    <td><a href="delete.php?id=<?php echo $donnee['id']; ?>">Delete</a></td>
                    <td><a href="edit.php?id=<?php echo $donnee['id']; ?>">Edit</a></td>
                    
                </tr>
                <?php } ?>

	
		
		<tr>
			<td>vicnent</td>
			<td>christophje</td>
			<td>13</td>
			<td>PHP</td>
		</tr>

		
	</tbody>
</table>
<div>
<a href="index.php"> <button>Creation</button></a>
</div>
<?php include "include/footer.php"; ?>
