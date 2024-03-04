<?php
define('DB_SERVER' , 'localhost');
define('DB_USERNAME' , 'root');
define('DB_PASSWORD' , '');
define('DB_NAME' , 'gestion_billet');

$connexion = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($connexion==false){
    die("ERROR: connexion échouée."  .mysqli_connect_error());
}

?>