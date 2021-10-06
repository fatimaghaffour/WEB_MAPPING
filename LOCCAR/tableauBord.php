<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tableau de Bord...</title>
<link rel="stylesheet" href="loccar_style.css">
<style>
	

.photocar{
	width: 130px;height: 100px;border-radius: 5%;border: 1px solid;
}

	</style>
</head>

<body>

<p><h1><b>Les accidents </b></h1>
 <?php
	
		
	$reqselect="SELECT * FROM `accidents` WHERE 1";

	$resultat=mysqli_query($cndonnées,$reqselect);
	
	$nbr=mysqli_num_rows($resultat);
	echo "<p>Total <b> ".$nbr."</b> Voitures</p>";
	  ?>
	</p>
	<p><a href="Ajouter.php"><img src="images/ajouter.png" width="50px" height="50px"></a></p>
<table width="100%" border="1">
  <tbody>
    <tr>
      <th>accident</th>
      <th>vittesse</th>
      <th>permis</th>
      <th>temps accident</th>
      <th>Supprimer</th>
      <th>Modifier</th>
    </tr>
    
   
	<?php
	while($ligne=mysqli_fetch_assoc($resultat))
	{
	?>
	   
    <tr>
      <td><?php echo $ligne['accident']; ?></td>
      <td><?php echo $ligne['vittesse']; ?></td>
      <td><?php echo $ligne['permis']; ?></td>
       <td><?php echo $ligne['temps accident']; ?></td>
      <td><a href="supprimer.php?supCar=<?php echo $ligne['accident']; ?>"><img src="images/supprimer.png" width="50px" height="50px"></a></td>
      <td><a href="modifier.php?mod=<?php echo $ligne['accident']; ?>"><img src="images/modifier.png" width="50px" height="50px"></a></td>

    </tr>
    <?php } ?>
  </tbody>
</table>



</body>
</html>