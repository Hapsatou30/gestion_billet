<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
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
                <a class="nav-link" aria-current="page" href="#">ACCUEIL</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">RÉSERVEZ UN BILLET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">LISTE DES BILLETS</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </header>
    <main>
        <!-- Bannière principale -->
        <section class="banner">
            <div class="banner-text">
                <h2>Partez à L'aventure avec Nous</h2>
                <p>Recherchez et réservez vos billets de voyage en toute simplicité.</p>
                <form action="#" method="get">
                    <input type="text" name="destination" placeholder="Entrez votre destination">
                    <input type="date" name="date" placeholder="Date de départ">
                    <button type="submit">Rechercher</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Réservez vos billets</p>
    </footer>
</body>
</html>