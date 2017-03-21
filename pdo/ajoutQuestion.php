<?php
ini_set("display_errors","on");
	extract($_POST);
	$idTheme=$_POST['id_theme'];
	$question=$_POST['questionSaisie'];
	$indice=$_POST['indice'];
	$nbChoix=$_POST['nbChoix'];
	$table="questionnaire";
	$link = mysqli_connect("localhost","root","root",$table);
	if(!$link) die('Erreur de connexion');
	$sql = "INSERT INTO question(question, indice,id_theme, nbChoix) VALUES('$question','$indice','$idTheme','$nbChoix')" or die("Probleme dans la requete");
	$result = mysqli_query($link,$sql);
	$num_rows = mysqli_num_rows($result);
	header('Location: http://localhost/admin.html');
mysqli_close($link);
?>