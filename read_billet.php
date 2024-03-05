<?php
require_once "config.php";

$query = "SELECT * FROM billet INNER JOIN client WHERE billet.id_client = client.id";
$result = mysqli_query($connexion,$query);

if(mysqli_num_rows($result)>0){
    echo'<div class="row row-cols-1 row-cols-md-2 g-4">';
    while($row = mysqli_fetch_assoc($result)){
        echo'<div class="col">';
        echo'<div class="card">';
        echo'<img src="./images/carte-embarquement-isolee-fond_53876-147830.jpg" class="card-img-top" alt="...">';
        echo'<div class="card-body">';
        echo' <h5 class="card-title">Réservation de billet</h5>';
        echo'<h6>Nom et Prenom </h6> <br>';
        echo'<p class="card-text">'.$row['prenom']. $row['nom'].'</p> <br>';
        echo'<h6>Trajet </h6> <br>';
        echo'<p class="card-text">'.$row['trajet'].'</p> <br>';
        echo'<h6> DATE </h6> <br>';
        echo'<p class="card-text">'.$row['date'].'</p> <br>';
        echo'<h6>Heure </h6> <br>';
        echo'<p class="card-text">'.$row['time'].'</p> <br>';
        echo'</div>';
        echo'</div>';
        echo'</div>' ;
    }
    echo'</div>'; // Fermeture de la balise de la ligne de la grille en dehors de la boucle while
}
?>
