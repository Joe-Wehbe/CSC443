function accept(accountId) {
    var result = confirm("Are you sure you want to accept the creation of this account?");
    if (result) {
        updateAccountStatus(accountId, 'accepted');
        alert("Request accepted.");
    }
}

function reject(accountId) {
    var result = confirm("Are you sure you want to reject the creation of this account?");
    if (result) {
        updateAccountStatus(accountId, 'rejected');
        alert("Request rejected.");
    }
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function updateAccountStatus(accountId, status) {
    $.ajax({
        type: 'POST',
        url: '/update-account-status',
        data: {
            accountId: accountId,
            status: status
        }
    });
}

$(document).ready(function() {
    var userNameElements = $('.username-value');

    $('#searchInput').on('input', function() {
        var searchText = $(this).val().toLowerCase();

        userNameElements.each(function() {
            var userName = $(this).text().toLowerCase();
            var listItem = $(this).closest('.user-list-item');

            if (userName.includes(searchText)) {
                listItem.show();
            } else {
                listItem.hide();
            }
        });
    });
});
