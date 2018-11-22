<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="icon" type="img/icon" href="./resources/img/favicon.ico">
    <title>2Fight Version 3 - Rebirth</title>
</head>
<body>
    <div id="all">
        <img id="bg1" src="resources/img/bg/bg-1.png" alt="Goku X Vegeta">
        <div id="cached">
                <img src="resources/img/login/bh-connect2.jpg">
                <img src="resources/img/login/bh-connect3.jpg">
                <img src="resources/img/login/b-contact2.jpg">
                <img src="resources/img/login/b-inscription2.jpg">
                <img src="resources/img/login/b-presentation2.jpg">
            </div>
        <div id="all">
                <div id="dbowlz">
                        <img src="resources/img/dbowlz/chap1.png" onclick="return affimg(this);">
                        Chapitre:&nbsp; Ch 1 &nbsp; <a href="index.php?chap=2">Ch 2</a> &nbsp; <a href="index.php?chap=3">Ch 3</a> &nbsp; <a href="index.php?chap=4">Ch 4</a> &nbsp; <a href="index.php?chap=5">Ch 5</a> &nbsp; <a href="index.php?chap=6">Ch 6</a> &nbsp; <a href="index.php?chap=7">Ch 7</a> &nbsp;<a href="index.php?chap=8">Ch 8</a>
                    </div>
                <div style="position: absolute; bottom: 5px; right: 5px"><a href="guest-partenaires.php">Nos partenaires</a></div>
                
                <img src="resources/img/login/titre.gif" id="imgtitle" class="placement">
        
                <form action="index.php?connec=1" method="post" class="placement">
                    <table class="layout"><tr>
                        <td align="right">Pseudo&nbsp;:&nbsp;</td>
                        <td align="left">
                            <input type="text" name="pseudo" size="15" height="5" maxlength="20" class="connec" onmouseover="this.style.border='1px solid white'" onmouseout="this.style.border='1px solid #b8c5d8'">
                        </td>
                    </tr><tr>
                        <td align="right">Password&nbsp;:&nbsp;</td>
                        <td align="left">
                            <input type="password" name="passe" size="15" height="5" maxlength="20" class="connec" onmouseover="this.style.border='1px solid white'" onmouseout="this.style.border='1px solid #b8c5d8'">
                            <a href="guest-mdp_oublie.php">Oublié&nbsp;?</a></td>
                    </tr></table>
                    <input type="hidden" name="connexion" value="1"/>
                    <input type="image" src="resources/img/login/bh-connect.jpg" onclick="submitButton(this)" onmouseover="if (youcan) ltoggle(this,'2')" onmouseout="if (youcan) ltoggle(this,'')">
                </form>
                <div id="autresliens" class="placement">
                    <a href="guest-presentation.php"><img src="resources/img/login/b-presentation.jpg" width="200" height="50" alt="Présentation" onmouseover="ltoggle(this,'2')" onmouseout="ltoggle(this,'')"></a>
        
                    <a href="guest-inscription.html"><img src="resources/img/login/b-inscription.jpg" width="200" height="50" alt="Inscription" onmouseover="ltoggle(this,'2')" onmouseout="ltoggle(this,'')"></a>
        
                    <a href="mailto:contact-2f@redsymbiose.fr"><img src="resources/img/login/b-contact.jpg" width="200" height="50" alt="Contact" onmouseover="ltoggle(this,'2')" onmouseout="ltoggle(this,'')"></a>
                    
                    <p>Il y a actuellement 0 joueur(s)</p>

                    <p style="font-size:80%"><a href="index.php?tpl=flash1">Flash &amp; Music</a> - <a href="index.php?tpl=flash2">Flash Vidéo</a></p>
                </div>
            </div>
    </div>
    <script type="text/javascript">
	checkscreen();
	var youcan=1;
	function submitButton(z) {
		z.src='resources/img/login/bh-connect3.jpg';
		youcan=0;
	}
	function ltoggle(z, a) {
		image = z.src.replace(/2?\.jpg/, '');
		z.src = image+a+'.jpg';
	}
</script>
<script type="text/javascript">
	function checkscreen() {
		var swidth = screen.width; // screen.width n'est pas modifiable ce qui empeche les tests
		
		var closeme = "<br><input type=submit onclick='this.parentNode.style.display=\"none\"' value='X Fermer' style='font: 9px sans-serif'>";
		if ( swidth < 1023 )
			document.write("<div id='jsmsg'>Votre écran semble de définition inférieure à 1024x768.<br>Nous sommes désolé, mais 2Fight est absolument injouable dans une si petite taille. Vous voilà prévenu."+closeme+"</div>");
		else if ( swidth < 1025 )
			document.write("<div id='jsmsg'>Votre écran semble de définition 1024x768.<br>Pour profiter au mieux du jeu, nous vous conseillons de jouer avec votre navigateur en plein écran. Pour cela, appuyez sur F11."+closeme+"</div>");
	}

	var tgglbowl=true;
	function affimg(zis) {
		if (tgglbowl)
			zis.src = zis.src.replace(/chap(\d+).png/, 'chapitre-$1.gif');
		else
			zis.src = zis.src.replace(/chapitre-(\d+).gif/, 'chap$1.png');
		tgglbowl = !tgglbowl;
		return false;
	}
</script>
</body>
</html>