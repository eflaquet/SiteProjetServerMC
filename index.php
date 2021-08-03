<?php require('CLASS/JSONAPI.php');
//ini_set('display_errors', 'off');
// get this file at: https://github.com/alecgorge/jsonapi/raw/master/sdk/php/JSONAPI.php
$ip = "127.0.0.1";
$nombre = 0;
// Ip du serveur
$port = 20059; //port du plugin (par défaut : 20059)
$utilisateur = "admin"; //nom d'utilisateur
$motdepasse = "changeme"; //mot de passe
$salt = "salt";

$api = new JSONAPI($ip, $port, $utilisateur, $motdepasse, $salt); // on affiche le nombre de joueur
//print_r($api->call("players.online"));

//echo "</br>".$test[0]['success'][0]['name'];
//if (!$api->call("")) echo "non";
if ($test = $api->call("players.online"))
    echo sizeof($test[0]['success']);
   print_r($api->call("getPlayerLimit"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accuiel</title>
    <link rel="stylesheet" href="CSS/cssindex.css">
</head>

<body>
    <header>
        <div class="baniere">

        </div>
        <div id="wrap">
            <nav class="navbar">
                <li><a href="#">Accueil</a></li>
                <li>
                    <a href="#">Forum</a>
                    <ul>
                        <li><a href="#">Demande d'aide</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">..</a>
                    <ul>
                        <li><a href="#">.</a></li>
                        <li><a href="#">.</a></li>
                        <li><a href="#">.</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">.</a>
                    <ul>
                        <li><a href="#">.</a></li>
                        <li><a href="#">.</a></li>
                        <li><a href="#">.</a></li>
                        <li><a href="#">.</a></li>
                        <li><a href="#">.</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">.</a>
                    <ul>
                        <li><a href="#">.</a></li>
                        <li><a href="#">.</a></li>
                        <li><a href="#">.</a></li>
                        <li><a href="#">.</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">.</a>
                    <ul>
                        <li><a href="#">.</a></li>
                        <li><a href="#">.</a></li>
                        <li><a href="#">.</a></li>
                        <li><a href="#">.</a></li>
                    </ul>
                </li>
            </nav>
        </div>
        <div class="sous-nav">

        </div>
    </header>
    <section>
        <div>
            <p>Description</p>
        </div>
        <div>
            <figure>
                <img src="blob:null/2d8d1bae-fb85-4cdf-9254-334db34cdb2d" alt="">
            </figure>
        </div>
    </section>
    <footer>

    </footer>
</body>

</html>