<!doctype html>
<?php 
    include('./fonctions/fonctions.php');
    include('./app.config.php');
?>
<html lang="fr">
    <head>
        <title>Pont du port du Havre</title>
        <link href="./styles/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="listes.php">Liste des ponts</a></li>
            <li style="float:right"><a class="active" href="about.php">A propros !</a></li>
        </ul>
        <div class="contenu">
            <p>Bienvenue sur cette application qui vous permet d'afficher uniquement les status des ponts de votre choix au Havre</p>
            <p>Cette application est gratuite et utilise les données du site <a href="https://www.havre-port.com/" target="_blank">Havre-Port.com</a></p>
            <p>Il vous est possible de récupérer les sources directement sur GitHUB et de faire vivre l'application à votre guise.</p>
        </div>
        <?php include ("./footer.php"); ?>
    </body>
</html>
