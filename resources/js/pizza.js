function updatePrice(index) {
    var quantity = document.getElementById('quantity' + index).value;
    var originalPrice = parseFloat(document.querySelector('.pizza-price[data-index="'+index+'"]').getAttribute('data-price'));
    var newPrice = (originalPrice * quantity).toFixed(2);
    document.querySelector('.pizza-price[data-index="'+index+'"]').textContent = "Preis " + newPrice + " € ";
    document.querySelector('.pizza-price-input[data-index="'+index+'"]').value = newPrice;
}

// Plus Taste fügt 1 hinzu - ist auf 1 initialisiert und kann 0 werden, aber keinen neg. Wert annehmen
window.increase = function(index) {
    let quantityInput = document.getElementById('quantity' + index);
    let currentValue = parseInt(quantityInput.value, 10);
    if (currentValue < 20) {
        quantityInput.value = currentValue + 1;
    }
    updatePrice(index); // Aktualisiere den Preis und die Gesamtsumme
    updateTotal();
}
// Minus Taste zieht 1 ab - stoppt bei 0
window.decrease = function(index) {
    let quantityInput = document.getElementById('quantity' + index); // Das Eingabefeld mit dem entsprechenden Index auswählen
    let currentValue = parseInt(quantityInput.value, 10);
    if (currentValue > 0) {
        quantityInput.value = currentValue - 1;
    }
    updatePrice(index); // aktualisiert Preis und Gesamtsumme
    updateTotal();
}
// Funktion zum Aktualisieren der Gesamtsumme
window.updateTotal = function() {
    let total = 0;
    document.querySelectorAll('.pizza-price').forEach(function(priceSpan, index) {
        let price = parseFloat(priceSpan.getAttribute('data-price'));
        let quantity = parseInt(document.getElementById('quantity' + index).value);
        total += price * quantity;
    });
    document.getElementById('total_price').value = total.toFixed(2); // aktualisiert den versteckten Input für den Gesamtpreis
    document.getElementById('gespreis').textContent = "Gesamtpreis: " + total.toFixed(2) + " €";
}

// Event-Listener für den Button "weitere Pizza erstellen" - mit JavaScript navigieren
document.getElementById('weiterePizzaButton').addEventListener('click', function() {
    window.location.href = '/#belegen';
});

