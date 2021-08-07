<!doctype html>
<?php 
    include('./fonctions/fonctions.php');
    include('./app.config.php');
?>
<html lang="fr">
    <head>
        <title>Ponts du port du Havre</title>

        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">

        <link href="./styles/styles.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <ul>
            <li><a class="active" href="#">Accueil</a></li>
            <li><a href="listes.php">Liste des ponts</a></li>
            <li style="float:right"><a href="about.php">A propros !</a></li>
        </ul>
        <div class="grid-container">
            <?php 
                foreach($mesponts as $pont) {
                    $couleur = get_statusPontCouleur($pont);
            ?>
            <div class="grid-item">
                <?php    
                    echo "<strong>";
                    echo $pont . " : " . get_nomPont($pont);
                    echo "</strong>";
                    echo "<br /> ";
                    echo "<span style='color:$couleur'>";
                    echo get_statusPont($pont);
                    echo "</span>";
                    echo "<br />";
                    echo get_descPont($pont);
                    echo "<br />";
                    echo get_datePont($pont);
                ?>        
            </div>
            <?php } ?>
        </div>
        <?php include ("./footer.php"); ?>
    </body>
</html>
