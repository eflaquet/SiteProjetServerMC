<?php
require('../CLASS/JSONAPI.php');
$ip = "127.0.0.1";
// Ip du serveur
$port = 20059; //port du plugin (par défaut : 20059)
$utilisateur = "admin"; //nom d'utilisateur
$motdepasse = "changeme"; //mot de passe
$salt = "salt";

$api = new JSONAPI($ip, $port, $utilisateur, $motdepasse, $salt); // on affiche le nombre de joueur
if ($onlinePlayers = $api->call("players.online"))
    $tesst["result"] = sizeof($onlinePlayers[0]['success']);
    unset($api);
    echo json_encode($tesst);

 ?>