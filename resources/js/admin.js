// Dropdown Auswahlmenü Admin
function initDropdownSelection() {
    document.querySelectorAll('.option').forEach(function (element) {
        element.addEventListener('click', function () {
            const value = parseInt(element.getAttribute('data-value'));
            const userId = element.getAttribute('data-user-id');
            selectOption(value, userId);
        });
    });
}

function selectOption(value, userId) {
    document.getElementById('is_admin_' + userId).value = value;
    document.getElementById('selected_option_' + userId).innerText = value === 1 ? 'Ja' : 'Nein';
}

document.addEventListener('DOMContentLoaded', initDropdownSelection);


