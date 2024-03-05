<?php
// Inclure le fichier de configuration contenant les informations de connexion à la base de données
require_once "config.php";

// Vérifier si le formulaire a été soumis
if(isset($_POST['submit'])){
    // Récupérer les valeurs des champs du formulaire
    $date=$_POST['date'];
    $time=$_POST['time'];
    $prix=$_POST['prix'];
    $statut=$_POST['statut'];
    $validite=$_POST['validite'];
    $trajet=$_POST['trajet'];
    
    // Construire la requête SQL pour insérer les données dans la table "billet"
    $sql = "INSERT INTO billet(`date`, `time`, `prix`, `statut`, `validite`, `trajet`) 
            VALUES ('$date', '$time', '$prix', '$statut', '$validite', '$trajet')";
    
    // Exécuter la requête SQL
    $result = mysqli_query($connexion,$sql);

    // Vérifier si l'insertion a réussi
    if (!$result){
        // Gérer l'erreur en cas d'échec de l'insertion
        die("La connexion a échoué : " . $connexion->error);
    } else {
        // Rediriger vers la page d'accueil après l'insertion réussie
        header('Location: accueil.php');
        // Arrêter l'exécution du script
        exit;
    }
}
?>
