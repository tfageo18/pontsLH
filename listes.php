<!doctype html>
<?php 
    include('E:/laragon/www/ponts/fonctions/fonctions.php');
    include('E:/laragon/www/ponts/app.config.php');
?>
<html lang="fr">
    <head>
        <title>Liste des ponts du port du Havre</title>
        <link href="./styles/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a class="active" href="listes.php">Liste des ponts</a></li>
            <li style="float:right"><a href="about.php">A propros !</a></li>
        </ul>
        <div class="contenu">
            <?php 
                $ponts = get_Ponts();
                $data  = file_get_contents($jsonfile); 
                $obj   = json_decode($data); 
                foreach($ponts as $key => $val) {
                    echo $key . " : " . $obj->{'data'}->$key->{'nom'} . "<br />";
                }
            ?>
        </div>
        <?php include ("./footer.php"); ?>
    </body>
</html>
