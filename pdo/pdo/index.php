 <?php
 session_start() ;
 ?>
 <!DOCTYPE html >
 <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="accueil.css"/>
		<meta charset="utf-8">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$( function() {
  $("#create").click( function(){
   $("#contenu").load("create.php?nom=" + $("#nom").val() );
  }) ;
  
  $("#read").click( function(){
    $("#contenu").load("read.php");
  }) ;

  $("#dest").click( function(){
    $("#contenu").load("destroy.php");
  }) ;
    
    
});
</script>
		<title>Connexion au questionnaire</title>
	</head>
	
	<body>
		<div id="entete">

			<img src="images/Logo_transparent.png" class="logo" id="logo"/>

		</div>
	
		<div id="contenu" align="center" >
		
			<form action="connexion.php" method="POST">
			
				<label>Identifiant Session : <input type="text" id="nom" name="nom"/> </label> <br/> <br/>
				<input type="submit" id="create" value="Connexion"/> 
				
			</form>
		</div>
	</body>
</html>