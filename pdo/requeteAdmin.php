<?php
ini_set("display_errors","on");
$theme=$_GET['valeur'];
echo($theme);
//$idTheme = rand(1,25);
$table="questionnaire";
$link = mysqli_connect("localhost","root","root",$table);
if(!$link) die('Erreur de connexion');
$sql = "INSERT INTO theme(theme) VALUES('$theme')";
$result = mysqli_query($link,$sql)or die ("bug requete");
$num_rows = mysqli_num_rows($result);
if($num_rows != 1){
	echo("Erreur dans la BD");
}else{
header('Location: admin.html');
	}
mysqli_close($link);
?>