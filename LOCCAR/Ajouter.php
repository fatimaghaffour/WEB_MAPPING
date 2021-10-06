<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ajouter</title>
<link rel="stylesheet" href="loccar_style.css">

</head>

<body>
<div id="container">
	
	<form name="formadd" action="" method="post" class="formulaire" enctype="multipart/form-data">
		<h2 align="center">Ajouter Nouvelle Accident...</h2>
                
                <label><b>accident</b></label>
                <input class="zonetext" type="text" placeholder="Entrer Accident<" name="txtImm" required>

                <label><b>vittesse</b></label>
                <input class="zonetext" type="text" placeholder="Entrer la vittesse" name="txtMarque" required>

               <label><b>permis </b></label>
                <input class="zonetext" type="text" placeholder="Entrer le type permis" name="txtPl" required>
                
                <label><b>temps</b></label>
                <input class="zonetext" type="text" placeholder="temps accident" name="txtphoto" required>
                
                <input type="submit" id='submit' class="submit" name="btadd" value='Ajouter' >
                
		<p><a href="accuiel.php" class="submit" >Tableau de Bord</a></p>
                
                <label style="text-align: center;color: #360001;">
                	
                	<?php
	if(isset($_POST['btadd']))
	{
		$accident=$_POST['txtImm'];
		$vittesse=$_POST['txtMarque'];
		$permis=$_POST['txtPl'];
				
  	$temps = $_POST['txtphoto'];
  	
	

  	}
  	$sql = "INSERT INTO `accidents` (`accident`, `vittesse`, `permis`, `temps accident`) VALUES ('$accident','$vittesse','$permis', '$temps')";
		$resultat=mysqli_query($cndonnées,$sql);

if($resultat)
{
	echo "Insertion des données validés";
}else{
	echo "Echec d'insertion des données !";
}

  	
  
  
		
		
	?>
                	
                	
                	
                </label>
	</form>
	
	
	
</div>


</body>
</html>