function confirmDelete() {
    var result = confirm("Are you sure you want to delete this account?");
    if (result) {
        alert("Account deleted successfully.");
    }
}

function openDepositModal() {
    document.getElementById("deposit-modal-container").style.display = "flex";
}

function closeDepositModal() {
    document.getElementById("deposit-modal-container").style.display = "none";
}

function openWithdrawModal() {
    document.getElementById("withdraw-modal-container").style.display = "flex";
}

function closeWithdrawModal() {
    document.getElementById("withdraw-modal-container").style.display = "none";
}

function openToModal() {
    document.getElementById("to-modal-container").style.display = "flex";
}

function closeToModal() {
    document.getElementById("to-modal-container").style.display = "none";
}

function openFromModal() {
    document.getElementById("from-modal-container").style.display = "flex";
}

function closeFromModal() {
    document.getElementById("from-modal-container").style.display = "none";
}

var cards = document.getElementsByClassName('card');
for (var i = 0; i < cards.length; i++) {
    cards[i].addEventListener('click', function() {
        var accountId = this.getAttribute('data-account-id');
        window.location.href = '/account-details/' + accountId;
    });
}


$(document).ready(function() {
    var transactionDateElements = $('tbody tr td:first-child');

    $('#searchInput').on('input', function() {
        var searchText = $(this).val().toLowerCase();

        transactionDateElements.each(function() {
            var transactionDate = $(this).text().toLowerCase();
            var row = $(this).closest('tr');

            if (transactionDate.includes(searchText)) {
                row.show();
            } else {
                row.hide();
            }
        });
    });
});



