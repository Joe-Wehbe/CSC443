var cards = document.getElementsByClassName('card');
for (var i = 0; i < cards.length; i++) {
    cards[i].addEventListener('click', function() {
        window.location.href = '/user-account-details';
    });
}
