<?php 
include('E:/laragon/www/ponts/app.config.php');
 
# Récupération de la liste des ponts
function get_Ponts() {
    # Récupération du contenu du JSON
    global $jsonfile;
    $data       = file_get_contents($jsonfile); 
    # Décodage du JSON
    $obj        = json_decode($data); 
    $ponts = $obj->{'data'};

    return $ponts;
}

function get_nomPont($id) {
    # Récupération du contenu du JSON
    global $jsonfile;

    $data       = file_get_contents($jsonfile); 
    # Décodage du JSON
    $obj        = json_decode($data); 
    $nomPont = $obj->{'data'}->$id->{'nom'};

    return $nomPont;
}

function get_statusPont($id) {
    # Récupération du contenu du JSON
    global $jsonfile;

    $data       = file_get_contents($jsonfile); 
    # Décodage du JSON
    $obj        = json_decode($data); 
    $statusPont = $obj->{'data'}->$id->{'statutText'};
 
    return $statusPont;
}

function get_statusPontCouleur($id) {
    # Récupération du contenu du JSON
    global $jsonfile;

    $data       = file_get_contents($jsonfile); 
    # Décodage du JSON
    $obj        = json_decode($data); 
    $statusPont = $obj->{'data'}->$id->{'statutText'};
    $couleur    = "black";

    if(stristr($statusPont,"Ouvert")){ $couleur = "green"; }
    if(stristr($statusPont,"Fermeture")){ $couleur = "orange"; }
    if(stristr($statusPont,"Bientôt ouverrt")){ $couleur = "blue"; }
    if(stristr($statusPont,"Fermé")){ $couleur = "red"; }
        
    return $couleur;
}

function get_datePont($id) {
    # Récupération du contenu du JSON
    global $jsonfile;
    $data       = file_get_contents($jsonfile); 
    # Décodage du JSON
    $obj        = json_decode($data); 
    $datePont = $obj->{'data'}->$id->{'date'};

    return $datePont;
}

function get_descPont($id) {
    # Récupération du contenu du JSON
    global $jsondescription;
    $data       = file_get_contents($jsondescription); 
    # Décodage du JSON
    $obj        = json_decode($data); 
    $descPont   = $obj->{'data'}->$id->{'description'};

    return $descPont;
}