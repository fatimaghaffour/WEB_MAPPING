<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modifier </title>
<link rel="stylesheet" href="loccar_style.css">

</head>

<body>


<div id="container">
	
	<form name="formadd" action="" method="post" class="formulaire" enctype="multipart/form-data">
		<h2 align="center">Mettre a Jour une  Accident...</h2>
                
                <label><b>accident</b></label>
                <input class="zonetext" type="text" name="txtImm" value="<?php echo $_GET['mod'] ?>" >

                <label><b>vittesse</b></label>
                <input class="zonetext" type="text" placeholder="Entrer la vittesse" name="txtMarque" required>

               <label><b>permis</b></label>
                <input class="zonetext" type="text" placeholder="Entrer type de permis" name="txtPl" required>
                
                <label><b>temps accident</b></label>
                <input class="zonetext" type="text" placeholder=" Entrer temps accident" name="txtphoto" required>
                
                <input type="submit" id='submit' class="submit" name="btmod" value='Mettre a Jour' >
                
		<p><a href="accuiel.php" class="submit" >Tableau de Bord</a></p>
                
                <label style="text-align: center;color: #360001;">
                	
                	<?php
	if(isset($_POST['btmod']))
	{
		$accident=$_POST['txtImm'];
		$vittesse=$_POST['txtMarque'];
		$permis=$_POST['txtPl'];
		
		$modifier=(int) ($_GET["mod"]);
		
  	$temps_accident = $_POST['txtphoto'];
  	
		


  	$sql = "UPDATE accidents SET accident = '$accident', vittesse = '$vittesse' , permis ='$permis' WHERE accident ='".$_GET["mod"]."'";
		$resultat=mysqli_query($cndonnées,$sql);


if($resultat)
{
  echo "Insertion des données validés";
}else{
  echo "Echec d'insertion des données !";
}
    
  }
  
    
    
		
	?>
                	
                	
                	
                </label>
	</form>
	
	
	
</div>



   
 
</body>
</html>