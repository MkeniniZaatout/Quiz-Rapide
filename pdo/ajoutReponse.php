<?php
ini_set("display_errors","on");
	extract($_POST);
	$reponse=$_POST['reponseSaisie'];
	$idQuestion=$_POST['id_question'];
	$etat=$_POST['etat'];
	//echo($etat);
	$table="questionnaire";
	$link = mysqli_connect("localhost","root","root",$table);
	if(!$link) die('Erreur de connexion');
	$sql = "INSERT INTO choix(choix,id_question,etat) VALUES('$reponse','$idQuestion','$etat')" or die("Probleme dans la requete");
	$result = mysqli_query($link,$sql);
	$num_rows = mysqli_num_rows($result);
	header('Location: http://localhost/admin.html');
mysqli_close($link);
?>