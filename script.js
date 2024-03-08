// Définition de la fonction updatePrice
function updatePrice() {
    // Récupération de l'élément de la liste déroulante par son ID
    var selectElement = document.getElementById("trajet");
    
    // Récupération de l'élément d'entrée de prix par son ID
    var priceInput = document.getElementById("prix");
    
    // Récupération de l'option sélectionnée dans la liste déroulante
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    
    // Récupération du prix à partir de l'attribut data-price de l'option sélectionnée
    var price = selectedOption.getAttribute("data-price");
    
    // Mise à jour de la valeur du champ de saisie de prix avec le prix récupéré
    priceInput.value = price;
}


