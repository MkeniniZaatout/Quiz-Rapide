<?php
session_start(); // create session
$nom = $_POST['nom'];
$time = 365*24*3600;
$_SESSION['nom'] = $nom;
setcookie('nom', $nom, time() + $time, null, null, false, true);

ini_set("display_errors","on");
$link = mysqli_connect("localhost","root","","projet");
if(!$link) die('Erreur de connexion');	
$sql = "SELECT nom FROM utilisateur WHERE nom = '$nom'";
$result = mysqli_query($link,$sql);
$num_rows = mysqli_num_rows($result);
echo ($num_rows);
if($num_rows == 1)
{
	if($nom == "Portmann")
	{
		header('Location: admin.html');
	}
	else
	{
		header('Location: quest.php');
	}
}
else header('Location: page.html');


$sqlId = "SELECT id_etudiant FROM utilisateur WHERE nom = '$nom'";
$result = mysqli_query($link,$sqlId);
while($donnees = $result->fetch_assoc())
	$_SESSION['id'] = $donnees['id_etudiant'];


mysqli_close($link);
?>