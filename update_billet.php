<?php
require_once "config.php";

// Vérification de la présence de l'ID du billet dans la requête GET
if(isset($_GET["id_billet"])) {
    // Récupération de l'ID du billet depuis la requête GET
    $id_billet = $_GET["id_billet"];

    // Requête SQL pour sélectionner les données du billet en fonction de son ID
    $query = "SELECT * FROM billet INNER JOIN client ON billet.id_client = client.id WHERE billet.id_billet = ?";
    
    // Préparation de la requête
    $stmt = $connexion->prepare($query);
    $stmt->bind_param("i", $id_billet);
    
    // Exécution de la requête SQL
    $stmt->execute();
    $result = $stmt->get_result();

    // Vérification si des données ont été trouvées
    if($result->num_rows > 0) {
        // Affichage du titre de la section

        // Affichage du formulaire de modification pour chaque résultat de la requête
        while($row = $result->fetch_assoc()) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update </title>
    <link rel="stylesheet" href="update.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Inclure le script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="./images/Logo.png" alt="logo"></a>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="read_billet.php">RETOUR</a>
                    </li>
                    
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="titre">
    <h1>Modifier les données d'un billet</h1>
    </div>
    <div class="container">
   
    <form action="" method="post">
    <div class="row">
        <!-- Champ de saisie de la date  de réservation -->
        <div class="form-group col-lg-6">
            <label for="">Date de réservation</label>
            <input type="date" name="date" class="form-control" value="<?php echo $row['date']; ?>">
        </div>
        <!-- Champ de saisie de l'heure de réservation -->
        <div class="form-group col-lg-6">
            <label for="">Heure de réservation</label>
            <input type="time" name="time" class="form-control" value="<?php echo $row['time']; ?>">
        </div>
        <!-- Champ de saisie du prix -->
        <div class="form-group col-lg-6">
            <label for="">Prix</label>
            <input type="text" name="prix" class="form-control" value="<?php echo $row['prix']; ?>">
        </div>
        <!-- Champ de saisie du statut -->
        <div class="form-group col-lg-6">
            <label for="">Statut</label>
            <input type="text" name="statut" class="form-control" value="<?php echo $row['statut']; ?>">
        </div>
        <!-- Champ de saisie de la validité -->
        <div class="form-group col-lg-6">
            <label for="">Validité</label>
            <input type="text" name="validite" class="form-control" value="<?php echo $row['validite']; ?>">
        </div>
        <!-- Champ de saisie du trajet -->
        <div class="form-group col-lg-6">
            <label for="">Trajet</label>
            <input type="text" name="trajet" class="form-control" value="<?php echo $row['trajet']; ?>">
        </div>
        <!-- Champ de saisie de l'id de l'utilisateur -->
        <div class="form-group col-lg-6">
            <label for="">Identifiant du client</label>
            <input type="text" name="id_client" class="form-control" value="<?php echo $row['id_client']; ?>">
        </div>
        <!-- Champ caché pour l'ID du billet -->
        <input type="hidden" name="id_billet" value="<?php echo $id_billet; ?>">
        <!-- Bouton de soumission du formulaire -->
        <div class="form-group col-lg-6">
            <input type="submit" name="submit" class="form-control" value="Modifier">
        </div>
    </div>
</form>

    </div>

<?php
        }
    } else {
        // Affichage d'un message si aucune donnée n'a été trouvée
        echo "Aucun billet trouvé avec cet ID.";
    }
} else {
    // Affichage d'un message si l'ID du billet n'est pas fourni dans la requête GET
    echo "ID du billet non fourni.";    
}

// Traitement de la soumission du formulaire de modification
if(isset($_POST['submit'])) {
    // Récupération des données du formulaire
    $id_billet = $_POST['id_billet'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $prix = $_POST['prix'];
    $statut = $_POST['statut'];
    $validite = $_POST['validite'];
    $trajet = $_POST['trajet'];
    $id_client = $_POST['id_client'];

    // Requête SQL pour mettre à jour les données du billet
    $sql = "UPDATE `billet` SET `date`=?, `time`=?, `prix`=?, `statut`=?, `validite`=?, `trajet`=?, `id_client`=? WHERE id_billet=?";
    
    // Préparation de la requête
    $stmt = $connexion->prepare($sql);
    $stmt->bind_param("ssdssssi", $date, $time, $prix, $statut, $validite, $trajet, $id_client, $id_billet);
    
    // Exécution de la requête SQL
    if($stmt->execute()) {
        // Redirection vers la page index.php après la mise à jour des données
        header("location: read_billet.php");
        exit(); // Arrêt du script après la redirection
    } else {
        // Affichage d'un message d'erreur si la requête de mise à jour échoue
        echo "Une erreur s'est produite lors de la mise à jour du billet.";
    }
}
?>

</body>
</html>