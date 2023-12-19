var cards = document.getElementsByClassName('card');
for (var i = 0; i < cards.length; i++) {
    cards[i].addEventListener('click', function() {
        var accountId = this.getAttribute('data-account-id');
        window.location.href = '/account-details/' + accountId;
    });
}
