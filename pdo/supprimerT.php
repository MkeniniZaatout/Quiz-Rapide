<?php
ini_set("display_errors","on");
$themeSup=$_GET['valeur'];
$link = mysqli_connect("localhost","root","root","questionnaire");
$id_theme = $bdd->query("SELECT id_theme FROM question WHERE = '$' ");
while($donnees = $reponse->fetch_assoc())
echo $donnees['indice'];

$sql1 = "SELECT id_theme FROM theme WHERE theme= '$themeSup'";
$result = mysqli_query($link,$sql1);


if(!$link) echo('Erreur de connexion');	
$req = mysqli_query("SELECT * FROM question WHERE id_theme = '$id_theme'") or die("Impossible d'executer la requête à la base de données");
	while ($row = mysql_fetch_array($req)) {
		$delRep = mysql_query("DELETE FROM reponses WHERE id_question = '$row['id']'") or die("Impossible d'executer la requête à la base de données");
	}
	$delQuestion = mysql_query("DELETE FROM question WHERE id_theme = '$$id_theme'") or die("Impossible d'executer la requête à la base de données");
$result = mysqli_query($link,$req);
$num_rows = mysqli_num_rows($result);
if($num_rows != 1){
	echo("Erreur dans la BD");
}else{
header('Location: admin.html');
}


mysqli_close($link);*/

?>