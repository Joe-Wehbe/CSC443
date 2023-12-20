function disableAccount() {
    var result = confirm("Are you sure you want to disable this account?");
    if (result) {
        alert("Account disabled successfully.");
    }
}


var cards = document.getElementsByClassName('card');
for (var i = 0; i < cards.length; i++) {
    cards[i].addEventListener('click', function() {
        var accountId = this.getAttribute('data-account-id');
        window.location.href = '/user-account-details/' + accountId;
    });
}