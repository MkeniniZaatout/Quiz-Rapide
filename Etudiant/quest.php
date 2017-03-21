<?php
session_start();
?>

<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8" />
<title> Questionnaire </title>
<style> #questions { background-color:#FFFFF0; } body { background-color:#F5DEB3; } </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>

<script>
"use strict";
var qq = [];
var vv = 0;
function Questions(){
	$.getJSON("http://localhost/transform.php", function(data){
	var tt = -1;
	var cc = 0;
	for(var t in data){
		if(data[t]["id_theme"]!=tt){
			$("#questions").append("<h3>" + data[t]["theme"] + "</h3>");
			for(var q in data){
				if(data[q]["id_theme"]==data[t]["id_theme"] && qq.indexOf(data[q]["id_question"])==-1){
					$("#questions").append("<label>" + data[q]["question"] + "</label> <br />");
					qq.push(data[q]["id_question"])
					cc = 0;
					for(var c in data){
						if(data[c]["id_question"]==data[q]["id_question"] && cc < data[q]["nbChoix"]){
							$("#questions").append("<input type=radio name=" + data[q]["id_question"] + " value=" + data[c]["id_choix"] + "/>" + data[c]["choix"] + "<br />");
							cc++;
						}
					}
					$("#questions").append("<button name=i" + data[q]["id_question"] + " id=" + data[q]["id_question"] + " onclick=Indice(this.id)> Indice </button>");
					$("#questions").append("<button name=v" + data[q]["id_question"] + " id=" + data[q]["id_question"] + " onclick=Valider(this.id)> Valider </button> <br /> <br />");
				}
			}
			tt=data[t]["id_theme"];
		}
	}
	});
}
function Indice(cid){
	$.post('hint.php', { id: cid }, function(data){
		$("#indice").html(data);
		$("button[name=i"+cid+"]").attr('disabled', true);
	});
}

function Valider(cid){
	$.post('result.php', { id: cid, rp: parseInt($("input[name="+cid+"]:checked").val()) }, function(data){
		$("button[name=v"+cid+"]").attr('disabled', true);
		$("button[name=i"+cid+"]").attr('disabled', true);
		vv++;
		if(vv>=qq.length)
			$("#Envoyer").show();
	});
}
</script>

</head>
<body onload="Questions();">
Session :  <?php echo $_SESSION['nom']; ?> !<br />
Cookie : <?php echo $_COOKIE['nom']; ?> !
<fieldset id=questions> </fieldset>
<h3> Indice </h3> <div id=indice> </div>
<form action="deconnexion.php" method="GET"> <input hidden id="Envoyer" type="submit" value="Valider" /> </form>
</body>
</html>