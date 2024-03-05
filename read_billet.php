<?php

    require_once "config.php";

    $query = "SELECT * FROM billet INNER JOIN client WHERE billet.id_client = client.id";
    $result = mysqli_query($connexion,$query);

    if(mysqli_num_rows($result)>0){
        echo'<section class="affichage">';
        while($row = mysqli_fetch_assoc($result)){
            echo'<div class="card text-bg-dark">';
            echo'<img src="./images/carte-embarquement-isolee-fond_53876-147830.jpg" class="card-img" alt="...">';
            echo'<div class="card-img-overlay">';
            echo' <h5 class="card-title">Réservation de billet</h5>';
            echo'<div class="nom_trajet">';
            echo'<h6>Nom et Prenom </h6> <br>';
            echo'<p class="card-text">'.$row['prenom']. $row['nom'].'</p> <br>';
            echo'<h6>Trajet </h6> <br>';
            echo'<p class="card-text">'.$row['trajet'].'</p> <br>';
            echo'</div>';
            echo'<div class="date_heure">';
            echo'<h6> DATE </h6> <br>';
            echo'<p class="card-text">'.$row['date'].'</p> <br>';
            echo'<h6>Trajet </h6> <br>';
            echo'<p class="card-text">'.$row['heure'].'</p> <br>';
            echo'</div>';
            echo'</div>';
            echo'</div>' ;
            echo'</section>';
        }
    }
    
    
?>