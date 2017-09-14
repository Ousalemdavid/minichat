<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Le Minichat Offline</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php
  try
            {
            	$bdd = new PDO('mysql:host=localhost;dbname=Minichat;charset=utf8', 'root', '22Misterhoo');
            }
            catch (Exception $e)
            {
                    die('Erreur : ' . $e->getMessage());
            }


?>
<header>
<h1> Chat OFFLINE </h1>
</header>

<div class="chattez">
<?php

$lire = $bdd->query('SELECT * FROM (SELECT * FROM Minichat_exo ORDER BY ID DESC LIMIT 10) sub ORDER BY id ASC');

while ($donnees = $lire->fetch())
{
?>



<?php echo $donnees['Pseudo'] . " : "  . $donnees['Message'] . '<br />';


}
 ?>
 </div>










<!-- Partie ou ont insère le pseudo et le message , qui est rediriger vers
lechat -->

<div class="Monformulaire">

<form action="lechat_post.php" method="post">

  <legend> Votre pseudo </legend>
    <input type="TEXT" name="pseudo" placeholder="Votre Pseudo"/><br />


<legend> votre message </legend>
    <textarea name="message" rows="8" cols="45" placeholder="Votre message"></textarea><br />

    <input type="submit" value="Envoyez"/>
  </form></div>


















<footer><p>Une création de merde , tout droit réservée 2017. </p> </footer>









        		<!-- Images Type  -->
        <!-- <img src="http://placehold.it/350x150" alt=""> -->
        	<!-- Fin Images Type  -->

      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://use.fontawesome.com/a0c828b765.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
