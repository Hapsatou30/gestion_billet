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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>

    .card {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 10px 4px 8px rgba(0, 0, 0, 0.1);
   
}

.card-img-top {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    max-height: 200px;
    object-fit: cover;
}

.card-title {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.card-text {
    color: #555;
}

.btn-primary {
    background-color: #00CED1;
    border-color: #FFFF;
}

.btn-primary:hover {
    background-color: #FF007F;
    border-color: #FFFF;
}
</style>
