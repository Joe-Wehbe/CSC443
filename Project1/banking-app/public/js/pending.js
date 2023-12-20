$(document).ready(function() {
    var cardElements = $('.card');

    $('#searchInput').on('input', function() {
        var searchText = $(this).val().toLowerCase();

        cardElements.each(function() {
            var accountTitle = $(this).find('.card-title').text().toLowerCase();

            if (accountTitle.includes(searchText)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});
