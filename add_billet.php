<?php
require_once "config.php";

if(isset($_POST['submit'])){
    $date=$_POST['date']; 
    $prix=$_POST['prix'];
    $statut=$_POST['statut'];
    $validite=$_POST['validite'];
    $trajet=$_POST['trajet'];

    
        $sql = "INSERT INTO billet(`date_heure`, `prix`, `statut`, `validite`, `trajet`) 
            VALUES ('$date', '$prix', '$statut', '$validite', '$trajet')";
        $result = mysqli_query($connexion,$sql);
        if (!$result){
       // Gérer l'erreur en cas d'échec de l'insertion
       die("La connexion a échoué : " . $connexion->error);
    } else {
        // Rediriger vers la page idea.php après l'insertion réussie
        header('Location: accueil.php');
        exit; // Arrêter l'exécution du script
    }
    
}
?>
