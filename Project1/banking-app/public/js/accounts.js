var card = document.getElementsByClassName('card');
for (var i = 0; i < card.length; i++) {
    clickableCards[i].addEventListener('click', function() {
        window.location.href = '/account-details';
    });
}
