<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter un billet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>ACHAT DE BILLET</h1>
    <div class="container">
        <form action="add_billet.php" method="post">
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="">Date et heure de réservation</label>
                    <input type="text" name="date"  class="form-control">
                </div>
                <div class="form-group col-lg-8">
                    <label for="">Prix</label>
                    <input type="text" name="prix"  class="form-control">
                </div>
                <div class="form-group col-lg-8">
                    <label for="">Statut</label>
                    <input type="text" name="statut"  class="form-control">
                </div>
                <div class="form-group col-lg-8">
                    <label for="">Validité</label>
                    <input type="text" name="validite"  class="form-control">
                </div>
                <div class="form-group col-lg-8">
                    <label for="">Trajet</label>
                    <input type="text" name="trajet"  class="form-control">
                </div>
                <div class="form-group col-lg-8">
                    
                    <input type="submit" name="submit" class="form-control" value="ACHETER">
                </div>
            </div>
        </form>
    </div>
</body>
</html>