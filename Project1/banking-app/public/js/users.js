$(document).ready(function() {
    $('#searchInput').on('input', function() {
        var searchText = $(this).val().toLowerCase();

        $('.user-list-item').each(function() {
            var firstName = $(this).find('.fname-value').text().toLowerCase();
            var lastName = $(this).find('.lname-value').text().toLowerCase();

            if (firstName.includes(searchText) || lastName.includes(searchText)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});
