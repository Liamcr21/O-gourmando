<?php

$prenom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

$msgmail = "Nouveau message de : ".$prenom."(".$email.")\n".$message;

mail("cariou.liam@orange.fr", "nouveau contact",$msgmail)

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link  rel="stylesheet" href="style_ogourmando.css" type="text/css">
 
  <title>O'Gourmando</title>
 </head>
<body> 

<div class="Accueil">

    <div class="header">

      <div class="divgauche">
        <div class="menu">
            <label for="menucheckbox"><img src="image/bouton_deroulant.svg" class="imgmenu"></label>
            <input type="checkbox" name="menucheckbox" id="menucheckbox">

            <div class="menuderoulant">
              <ul>
                <li><a href="decouvrir.html">Nous découvrir</a></li>
              <li><a href="recettes.html">Recettes</a></li>
                <li><a href="evenements.html">Evenements</a></li>
                <li><a href="newsletter.html">Newsletter</a></li>
              </ul>
              <hr>
              <ul>
                <li><a href="avis/hmtl">Avis</a></li>
                <li><a href="contact.html">Nous contacter</a></li>
              </ul>
              <hr>
              <ul>
                <li><a href="mention.html">Mentions légales</a></li>
                <li><a href="pc.html">Politique de confidentialité</a></li>                
              </ul>
              
            </div>
          </div>

            <ul class="socialLinks">
              <li><a href="#"><img src="image/logotiktok.svg"></a></li> 
              <li><a href="#"><img src="image/logotwitch.svg"></a></li>
              <li><a href="#"><img src="image/logoinsta.svg"></a></li>
              <li><a href="#"><img src="image/logoyoutube.svg"></a></li>
              <li><a href="#"><img src="image/logodiscord.svg"></a></li>
            </ul>
          
      </div>
          
      <div class="logoasso">
        <img src="image/logooff.gif">
      </div> 
      

  </div> 
</div>

<section class="mw1140"><h1>Pour nous contacter : </h1>

  <form method="post" action="contact.php">

<p><label for="nom">Prénom :</label><input type="text" name="nom" ></p>

<p><label for="email">Email :</label><input type="email" name="email" ></p>

<p><label for="message">Votre message :</label><textarea name="message"></textarea></p>

<p><button>Valider</button></p>

</form></section><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="footer"><footer>
  <div class="footerdivdroite">
    <p>mentions légales</p>
    <p>Politique de la confidentialité</p>
  </div>
    <div class="footerdivcenter">
    <p> <center>Nous contacter <br>
    Tél: 01 23 45 67 89 <br>
     22 Pl. Henri Gadeau de Kerville<br>76100 Rouen <br>(Métro Saint-Sever)<br>
     contact.ogourmondo@gmail.com
    </center>  </p>
    </div>
    <div class="footerdivg">
      <ul class="socialLinksfooter">
        <li><a href="#"><img src="image/logotiktok.svg"></a></li> 
        <li><a href="#"><img src="image/logotwitch.svg"></a></li>
        <li><a href="#"><img src="image/logoinsta.svg"></a></li>
        <li><a href="#"><img src="image/logoyoutube.svg"></a></li>
        <li><a href="#"><img src="image/logodiscord.svg"></a></li>
      </ul> 
    </div>
  </div>
</footer>
</body>




</html>

