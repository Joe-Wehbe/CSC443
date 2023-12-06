function confirmDelete() {
    var result = confirm("Are you sure you want to delete this account?");
    if (result) {
        alert("Account deleted successfully.");
    }
}

function openDepositModal() {
    document.getElementById("deposit-modal-container").style.display = "flex";
}

function closeDepositModal() {
    document.getElementById("deposit-modal-container").style.display = "none";
}

function openWithdrawModal() {
    document.getElementById("withdraw-modal-container").style.display = "flex";
}

function closeWithdrawModal() {
    document.getElementById("withdraw-modal-container").style.display = "none";
}

