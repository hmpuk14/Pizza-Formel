document.getElementById('confirmModalButton').addEventListener('click', function() {
    let changes = [];

    // Mengenänderungen sammeln
    document.querySelectorAll('input[name^="update_gram"]').forEach(function(input) {
        if (input.value) {
            let toppingName = input.closest('.row').querySelector('.col-md-2:nth-child(3)').textContent;
            let price = input.closest('.row').querySelector('.col-md-2:nth-child(4)').textContent;
            changes.push(`Neue Menge: ${input.value} - ${toppingName} - ${price}`);
        } else {
            input.disabled = true; // Feld deaktivieren, wenn keine Eingabe
        }
    });

    // Preisänderungen sammeln
    let lambdaPriceInput = document.querySelector('input[name^="update_lambda_price"]');
    if (lambdaPriceInput.value) {
        changes.push(`Lambda Preis - Grundpreis Pizza: ${lambdaPriceInput.value}`);
    } else {
        lambdaPriceInput.disabled = true; // Deaktiviere das Feld, wenn kein Wert vorhanden ist
    }
    let newPriceInput = document.querySelector('input[name="new_price"]');
    let categoryDropdown = document.querySelector('select[name="new_category"]');

    // Überprüfen, ob ein Preis eingegeben wurde und eine Kategorie ausgewählt wurde
    if (newPriceInput.value && categoryDropdown.value) {
        changes.push(`${categoryDropdown.value} - Neuer Preis: ${newPriceInput.value}`);
    }

    let titleMessage = changes.length ? 'Folgende Änderungen vornehmen?' : 'Keine Änderungen eingegeben';

    Swal.fire({
        title: titleMessage,
        html: changes.join('<br>'),
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'speichern',
        cancelButtonText: 'abbrechen',
        reverseButtons: true
    }).then((result) => {
        if (result.value && changes.length) {
            // Formular absenden, um in die Datenbank zu speichern
            document.getElementById('lagerstandForm').submit();
        } else if (result.dismiss === Swal.DismissReason.cancel || !changes.length) {
            // Bei "Abbrechen" oder wenn keine Änderungen vorliegen:
            // Eingabefelder leeren
            document.querySelectorAll('input').forEach(input => {
                input.value = '';
            });
            // Benutzer zurück zur "lagerstand" Ansicht leiten
            window.location.href = '/lagerstand';
        }
    });
});
