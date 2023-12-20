var cards = document.getElementsByClassName('card');
for (var i = 0; i < cards.length; i++) {
    cards[i].addEventListener('click', function() {
        var accountId = this.getAttribute('data-account-id');
        window.location.href = '/user-account-details/' + accountId;
    });
}

$(document).ready(function() {
    var accountTitleElements = $('.card-title');

    $('#searchInput').on('input', function() {
        var searchText = $(this).val().toLowerCase();

        accountTitleElements.each(function() {
            var accountTitle = $(this).text().toLowerCase();
            var card = $(this).closest('.card');

            if (accountTitle.includes(searchText)) {
                card.show();
            } else {
                card.hide();
            }
        });
    });
});

