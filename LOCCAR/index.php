<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>DONNEES.</title>
<link rel="stylesheet" href="loccar_style.css">
</head>

<body>
<div id="entete">
<!-- ----------------------------------------------------Login ---------------------->
<a href="login.php" class="login">Login</a>


 <!-- ----------------------------------------------------------------------------------------------->


	<video class="video_entete" autoplay >
		<source   src="images/car.mp4" type="video/mp4">
	</video>
	<p class="nomsite">Location CAR</p>
	<div id="formauto">
		<form name="formauto" action="" method="post">
			<input type="text" name="motcle" placeholder="  Recherche par Marque" id="motcle">
			<input type="submit" name="btsubmit" value="Recherche" class="btfind">
		</form>
		
	</div>	
</div>


<div id="articles">
	
<?php
	
	if (isset($_POST['btsubmit']))
	{
		$mc=$_POST['motcle'];
		$reqselect="select * from accidents where accident  like '%$mc%'";
	}
		else{
		
		$reqselect="select * from accidents ";
	}
	$resultat=mysqli_query($cndonnées,$reqselect);
	
	$nbr=mysqli_num_rows($resultat);
	echo "<p><b> ".$nbr."</b> Resultat de votre Recherche...</p>";
	while($ligne=mysqli_fetch_assoc($resultat))
	{
	?>
	<div id="auto">
		 ?>"><br>
		<?php echo $ligne['accident ']; ?><br>
		<?php echo $ligne['vitesse']; ?><br>
		<?php echo $ligne['permis']; ?><br>
		<?php echo $ligne['temps accident']; ?><br>
	</div>
	
	
<?php } ?>
	
</div>




</body>
</html>