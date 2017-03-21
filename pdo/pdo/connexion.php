 <?php
	session_start() ;
	$_SESSION["nom"] = $_POST["nom"] ;
	print "Bienvennue sur le questionnaire : " . $_SESSION['nom'] ;

/*	-------------------------PDO ------------------------------------------------------------------*/
	try {
		$bdd = new PDO ('mysql:host=localhost;dbname:ProjetQuestionnaire;charset=utf8','projet','projet');
	} catch (Exception $e) {
		die ('Erreur' . $e ->getMessage());
	}
/*session_start();
$_SESSION["login"]=$_POST["login"];
  
try {$bdd = new PDO('mysql:host=localhost;dbname=ProjetQuestionnaire', 'projet', 'projet');}
catch (Exception $e) {die("L'accès à la base de donnée est impossible.");}
  
if(($_SESSION["login"] == "")) {
    echo "veuillez saisir un login et un mot de passe";
}
else {
    $requete = $bdd->query("SELECT COUNT(*) FROM utilisateurs WHERE login='".$_SESSION["login"]."'")->fetch();
    if ($requete['COUNT(*)'] == 1)
        header("Location: Formulaire.php");
}
else {
	$requete2 = $bdd->query("SELECT COUNT(*) FROM utilisateurs WHERE login='".$_SESSION["login"]."'AND idAdmin== 1 "'")->fetch();
	if ($requete['COUNT(*)'] == 1)
        header("Location: creationFormulaire.php");
}
*/
/*----------------------------------------------------------------------------------------------------*/
if(isset($_POST) && !empty($_POST['login'])) {
		// Extraction des données
		extract($_POST);
		// Accès à la base de données
		$login = $_POST['login'];
		// Crytage du mot de passe avec sha1
		$mdp = $_POST['mdp'];
		// Requête SQL
		$sql = "SELECT login, mdp FROM utilisateur WHERE login='$login' AND mdp='$mdp'";
		// Préparation de la requête
		$requete = $bdd->prepare($sql);
		// On exécute
		$requete -> execute();
		// Organise le résultat sous forme de tableau
		$data=$requete->fetch();


	// recupérer les données recues du formulaire
	$login = $_GET['login'];
	
	
	//verifier le tuple login,mot de passe
	$sql=	"SELECT * 
			FROM Utilisateurs 
			WHERE identifiant = '$login' AND motdepasse = PASSWORD('$motdepasse')";
	
	//    2: executer la requete
	$result = mysql_query($sql);
	
	if(mysql_num_rows($result) != 0) {
	header('Location: creationcomptetest.php');
	}
	else {
	header('Location: logAdminTest.html');
	}
?>