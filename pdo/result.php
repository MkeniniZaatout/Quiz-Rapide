<?php
session_start();
echo $_SESSION['id'];
$bdd = mysqli_connect("localhost","root","","projet");
$reponse = $bdd->query("SELECT etat FROM Choix WHERE id_choix=".$_POST['rp']);
while($donnees = $reponse->fetch_assoc())
if ($donnees['etat']==0)
	$bdd->query("INSERT INTO Score VALUES (0,".$_SESSION['id'].",".$_POST['id'].")");
else
	$bdd->query("INSERT INTO Score VALUES (".$_POST['np'].",".$_SESSION['id'].",".$_POST['id'].")");
?>