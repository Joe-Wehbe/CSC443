function disableAccount(accountId) {
    var result = confirm("Are you sure you want to disable this account?");
    if (result) {
        updateAccountAvailability(accountId, '0');
        alert("Account disabled successfully.");
    }
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function updateAccountAvailability(accountId, is_enabled) {
    $.ajax({
        type: 'POST',
        url: '/update-account-availability',
        data: {
            accountId: accountId,
            is_enabled: is_enabled
        }
    });
}


var cards = document.getElementsByClassName('card');
for (var i = 0; i < cards.length; i++) {
    cards[i].addEventListener('click', function() {
        var accountId = this.getAttribute('data-account-id');
        window.location.href = '/user-account-details/' + accountId;
    });
}