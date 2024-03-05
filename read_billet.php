<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Billets</title>
    <link rel="stylesheet" href="read.css">
    <!-- Inclure la feuille de style Bootstrap -->
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
                    <a class="nav-link" aria-current="page" href="index.php">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Reserver.php">RÉSERVEZ UN BILLET</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="read_billet.php">LISTE DES BILLETS</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
     
    </header>
    <div class="container">
    <h2>Liste des Billets</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php
        require_once "config.php";

        $query = "SELECT * FROM billet INNER JOIN client WHERE billet.id_client = client.id";
        $result = mysqli_query($connexion,$query);

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col">
                    <div class="card">
                        <img src="./images/240_F_659359825_XInQSIa2BUeSM2LuKntmw883qvAsyltr.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="height: 390px;">
                            <h5 class="card-title" style="color: #FE7A15;"><img src="./images/Logo.png" alt=""> N° billet de Réservation : <?php echo' '. $row['id_billet'] ?></h5>
                            <div class="client">
                            <div class="nom">
                            <h6 style="color: #FE7A15;">Nom et Prenom</h6>
                            <p class="card-text"><?php echo $row['prenom']. ' ' . $row['nom']; ?> </p>
                            </div>
                            <div class="coordonnees" style="text-align: center; gap: 20px;">
                            <h6 style="color: #FE7A15;">Email</h6>
                            <p class="card-text"><?php echo $row['email'] ?> </p>
                            </div>
                            </div>
                           <div class="trajet_tel">
                           <div class="trajet">
                           <h6 style="color: #FE7A15;">Trajet</h6>
                           <p class="card-text"><?php echo $row['trajet']; ?></p>
                           </div>
                          <div class="tel">
                          <h6 style="color: #FE7A15;">Telephone</h6>
                           <p class="card-text"><?php echo $row['telephone']; ?></p>
                          </div>
                           </div>
                           <div class="datetime">
                           <div class="date">
                           <h6 style="color: #FE7A15;"> Date </h6>
                            <p class="card-text"><?php echo $row['date']; ?></p>
                           </div>
                           <div class="time">
                           <h6 style="color: #FE7A15;">Heure </h6>
                            <p class="card-text"><?php echo $row['time']; ?></p>
                           </div>
                           </div>
                           <div class="price">
                           <div class="prix">
                           <h6 style="color: #FE7A15;"> Prix</h6>
                            <p class="card-text"><?php echo $row['prix']; ?></p>
                           </div>
                           <div class="validite">
                           <h6 style="color: #FE7A15;">Validité </h6>
                            <p class="card-text"><?php echo $row['validite']; ?></p>
                           </div>
                           </div>
                           <div class="update_delete">
                            <div class="update">
                           
                            <a href="update_billet.php?id_billet=<?php echo $row['id_billet']; ?>" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 15 15"><path fill="#3011BC" fill-rule="evenodd" d="M1.903 7.297c0 3.044 2.207 5.118 4.686 5.547a.521.521 0 1 1-.178 1.027C3.5 13.367.861 10.913.861 7.297c0-1.537.699-2.745 1.515-3.663c.585-.658 1.254-1.193 1.792-1.602H2.532a.5.5 0 0 1 0-1h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V2.686l-.001.002c-.572.43-1.27.957-1.875 1.638c-.715.804-1.253 1.776-1.253 2.97m11.108.406c0-3.012-2.16-5.073-4.607-5.533a.521.521 0 1 1 .192-1.024c2.874.54 5.457 2.98 5.457 6.557c0 1.537-.699 2.744-1.515 3.663c-.585.658-1.254 1.193-1.792 1.602h1.636a.5.5 0 1 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 1 1 1 0v1.845h.002c.571-.432 1.27-.958 1.874-1.64c.715-.803 1.253-1.775 1.253-2.97" clip-rule="evenodd"/></svg></a>
                            </div>
                            <div class="delete">
                            <a href="delete_billet.php?id_billet=<?php echo $row['id_billet']; ?>" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24"><path fill="#FE7A15" d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z"/></svg></a>
                            </div>
                           </div>
                                
                                   
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>

<style>
    
</style>
</body>
</html>
