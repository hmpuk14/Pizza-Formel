var total; // Globale Variable für den Gesamtwert
var result; // Globale Variable für das Ergebnis

// Zurücksetzen soll alle Input-Felder leeren. (Zutaten und Zutaten-Bilder)
window.clearSelection = function() {

    let toppingCheckboxes = document.querySelectorAll('.form-check-input');

    toppingCheckboxes.forEach(checkbox => {
        checkbox.checked = false;
    });

    let toppingImages = document.querySelectorAll('[id^="img"]');

    toppingImages.forEach(image => {
        image.style.display = 'none';
    });

    total = parseFloat($('#result').data('lambda'));
    result = '? €';

    $('#result-formula').text(result);

    if (typeof MathJax !== 'undefined' && MathJax) MathJax.typesetPromise([document.getElementById('result')]);
}

// Dropdown-Menü Zutaten
$(document).ready(function(){
    $('.dropdown-toggle').dropdown();
});

// Tooltip-Pizza-Formel
$(function () {
    $('.formula-container').tooltip({container: 'body', html: true});
});

// Berechnung Pizza Preis
$(document).ready(function () {
    var initialTotal = parseFloat($('#result').data('lambda'));
    total = initialTotal;
    result = '? €'; // Initialer Zustand von result

    $('.topping-checkbox').on('change', function () {
        var checkbox = $(this);
        var categoryPrice = parseFloat(checkbox.data('price'));

        if (checkbox.is(':checked')) {
            total += categoryPrice;
        } else {
            total -= categoryPrice;
            if ($('.topping-checkbox:checked').length === 0) {
                result = '? €';
            }
        }
        $('#pizzaForm').submit(function () {
            let priceText = $('#result-formula').text();
            let price = parseFloat(priceText.replace('€', '').trim());

            if (isNaN(price)) price = 0;

            $('#priceInput').val(price);
        });
        if ($('.topping-checkbox:checked').length !== 0) result = total.toFixed(2) + ' €';

        $('#result-formula').text(result);

        if (typeof MathJax !== 'undefined' && MathJax) MathJax.typesetPromise([document.getElementById('result')]);
    });
});
// Zutatenbilder erscheinen bei Klick checkbox
document.addEventListener('DOMContentLoaded', function () {
    const positions = [
        { top: '70px', left: '200px' },
        { top: '150px', left: '430px' },
        { top: '100px', left: '515px' },
        { top: '200px', left: '620px' },
        { top: '60px', left: '10px' },
        { top: '150px', left: '200px' },
        { top: '40px', left: '810px' },
        { top: '70px', left: '320px' },
        { top: '80px', left: '720px' },
        { top: '150px', left: '260px' },
        { top: '100px', left: '90px' },
        { top: '210px', left: '700px' },
        { top: '200px', left: '10px' },
        { top: '220px', left: '280px' },
        { top: '100px', left: '800px' },
        { top: '160px', left: '80px' },
        { top: '70px', left: '620px' },
        { top: '140px', left: '720px' },
        { top: '160px', left: '3200px' },
        { top: '220px', left: '100px' },
        { top: '210px', left: '450px' },
        { top: '70px', left: '450px' },
        { top: '210px', left: '550px' },
        { top: '150px', left: '620px' },
        { top: '40px', left: '900px' },
        { top: '145px', left: '890px' },
        { top: '150px', left: '620px' },
        { top: '1550px', left: '200px' },
        { top: '190px', left: '890px' },
    ];
    let index = 0;

    document.querySelectorAll('.form-check-input').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            const img = document.getElementById('img' + checkbox.value);

            if (checkbox.checked) {
                const position = positions[index % positions.length];
                img.style.top = position.top;
                img.style.left = position.left;
                img.style.display = 'block';
                img.classList.add('softFloating');
                index++;
            } else {
                img.style.display = 'none';
                img.classList.remove('softFloating');
            }
        });
    });
});


