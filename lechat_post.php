<?php
// ICI JE SECURISE Mon mot de passe en cas d'erreur , et je me connecte à mon serveur local

        try
    {
    	$bdd = new PDO('mysql:host=localhost;dbname=Minichat;charset=utf8', 'root', '22Misterhoo');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }


// Je vais récupéré  depuis ma base de donner tous les informations reçus du visiteur


$req = $bdd->prepare('INSERT INTO Minichat_exo(Pseudo, Message) VALUES( :Pseudo , :Message)');

$req->execute(array(

    'Pseudo' => htmlspecialchars($_POST['pseudo']),

    'Message' => htmlspecialchars($_POST['message']),


    ));


header("Location: index.php");



 $rep->closeCursor();
?>
