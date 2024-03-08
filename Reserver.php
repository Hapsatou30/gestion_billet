<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter un billet</title>
    <link rel="stylesheet" href="reserver.css">
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
    <section class="formulaire">
        <h1>RESERVER UN BILLET</h1>
        <div class="container">
            <!-- Formulaire d'achat de billet -->
            <div class="col-md-6">
            <form action="add_billet.php" method="post">
                    <div class="row">
                        <!-- Champ de saisie de la date  de réservation -->
                        <div class="form-group col-lg-6">
                            <label for="">Date  de réservation</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <!-- Champ de saisie de  l'heure de réservation -->
                        <div class="form-group col-lg-6">
                            <label for="">Heure de réservation</label>
                            <input type="time" name="time" class="form-control">
                        </div>
                          <!-- Champ de saisie du trajet -->
                          <div class="form-group col-lg-6">
                            <label for="trajet">Trajet</label>
                            <select name="trajet" id="trajet" class="form-control" style="margin-bottom: 10px; padding: 8px; border: 1px solid #ccc; border-radius: 22px; width: 100%; max-width: 300px; border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #3011BC;" onchange="updatePrice()">
                                <option value="">Sélectionnez un trajet</option>
                                <optgroup label="Trajets depuis Dakar">
                                    <option value="dakar-paris" data-price="450 100 XOF">Dakar - Paris</option>
                                    <option value="dakar-new-york" data-price="535 000 XOF">Dakar - New York</option>
                                    <option value="dakar-londres" data-price="880 750 XOF">Dakar - Londres</option>
                                    <option value="dakar-tokyo" data-price="500 00 XOF">Dakar - Tokyo</option>
                                    <option value="dakar-dubai" data-price="414 400 XOF">Dakar - Dubaï</option>
                                    <option value="dakar-toronto" data-price="397 900 XOF">Dakar - Mecque</option>
                                    <option value="dakar-sydney" data-price="275 000 XOF">Dakar - Sydney</option>
                                    <option value="dakar-rio-de-janeiro" data-price="450 000 XOF">Dakar - Rio de Janeiro</option>
                                    <option value="dakar-hong-kong" data-price="817 300 XOF">Dakar - Hong Kong</option>
                                    <option value="dakar-singapore" data-price="450 500 XOF">Dakar - Singapour</option>
                                    <option value="dakar-rome" data-price="200 000 XOF">Dakar - Rome</option>
                                    <option value="dakar-berlin" data-price="291 539 XOF">Dakar - Berlin</option>
                                    <option value="dakar-madrid" data-price="194400 XOF">Dakar - Madrid</option>
                                    <option value="dakar-moscou" data-price="397 900 XOF">Dakar - Moscou</option>
                                </optgroup>
                            </select>
                        </div>
                        <!-- Champ de saisie du prix -->
                        <div class="form-group col-lg-6">
                        <label for="prix">Prix</label>
                        <input type="text" name="prix" id="prix" class="form-control" readonly>
                        </div>
                        <!-- Champ de saisie du statut -->
                        <div class="form-group col-lg-6">
                            <label for="">Statut</label>
                            <input type="text" name="statut" class="form-control">
                        </div>
                        <!-- Champ de saisie de la validité -->
                        <div class="form-group col-lg-6">
                            <label for="">Validité</label>
                            <input type="text" name="validite" class="form-control">
                        </div>
                      

                        <!-- Champ de saisie de l'id de l'utilisateur -->
                        <div class="form-group col-lg-6">
                            <label for="">L'identifiant du client</label>
                            <input type="text" name="id_client" class="form-control">
                        </div>
                        <!-- Bouton de soumission du formulaire -->
                        <div class="form-group col-lg-6">
                            <input type="submit" name="submit" class="form-control" value="RESERVER">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
            <img src="./images/240_F_200801160_RwsMwJayAWtlWjnD41DRREgrgihQMdze.jpg" alt="Image" class="img-fluid">
        </div>
        </div>
    </section>
</div>
<script src="script.js"></script>
</body>
</html>
