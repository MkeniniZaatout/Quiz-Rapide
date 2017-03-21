<?php

ini_set("display_errors","on");
$login=$_GET['id']; 
sleep(2);

$link = mysqli_connect("localhost","root","root","projet_php");
if(!$link) echo('Erreur de connexion');	
$sql = "SELECT * FROM Etudiant WHERE nom = '$login'";
$result = mysqli_query($link,$sql);
$num_rows = mysqli_num_rows($result);

if($num_rows == 1){
	header('Location: quest.html');
	$_SESSION['identifiant']=$login;
	$_SESSION['connecte']=true;
}else header('Location: admin.html');
mysqli_close($link);

?>