function accept() {
    var result = confirm("Are you sure you want to accept the creation of this account?");
    if (result) {
        alert("Request accepted.");
    }
}

function reject() {
    var result = confirm("Are you sure you want to reject the creation of this account?");
    if (result) {
        alert("Request rejected.");
    }
}