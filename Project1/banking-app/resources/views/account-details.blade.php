<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/account-details.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Account Details</title>
    </head>
    <body>
        <nav>
            <div class="nav-container">
                <a class="title"> Viewing Account Details</a>
                <a href="/accounts">Home</a>
                <a href="">About</a>
                <a href="#">Logout</a>
            </div>
        </nav>

        <div class="container">
            <div class="search-container">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search transaction date...">

                <a href="/create-account" class="button">Create Account</a>
                <a href="/pending" class="button1">Pending Accounts</a>

            </div><br>

            <div class="inner-container">
                <div class="card"> Viewing account
                    <div class="card-content">
                        <div class="card-title">First account</div>
                        <p class="balance">
                            <i class="fa-solid fa-coins"></i> Balance:
                            <span class="balance-value">30000</span>
                        </p>
                        <p class="currency">
                            <i class="fa-solid fa-dollar-sign"></i> Currency:
                            <span class="currency-value">USD</span>
                        </p>
                        <p class="date">
                            <i class="fa-solid fa-calendar-days"></i> Creation date:
                            <span class="date-value">30-8-2021</span>
                        </p>
                    </div>
                </div>

                <div class="transactions-container"> Transactions history
                    <table>
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Withdrawals</th>
                            <th>Deposits</th>
                            <th>Balance</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Row 1, Cell 1</td>
                            <td>Row 1, Cell 2</td>
                            <td>Row 1, Cell 3</td>
                            <td>Row 1, Cell 4</td>
                        </tr>
                        <tr>
                            <td>Row 2, Cell 1</td>
                            <td>Row 2, Cell 2</td>
                            <td>Row 2, Cell 3</td>
                            <td>Row 1, Cell 4</td>
                        </tr>
                        <tr>
                            <td>Row 3, Cell 1</td>
                            <td>Row 3, Cell 2</td>
                            <td>Row 3, Cell 3</td>
                            <td>Row 1, Cell 4</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="other-accounts-container">View your other accounts
                <div class="card">
                    <div class="card-content">
                        <div class="card-title">Personal account</div>
                        <p class="balance">
                            <i class="fa-solid fa-coins"></i> Balance:
                            <span class="balance-value">30000</span>
                        </p>
                        <p class="currency">
                            <i class="fa-solid fa-dollar-sign"></i> Currency:
                            <span class="currency-value">EUR</span>
                        </p>
                        <p class="date">
                            <i class="fa-solid fa-calendar-days"></i> Creation date:
                            <span class="date-value">30-8-2021</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-title">First account</div>
                        <p class="balance">
                            <i class="fa-solid fa-coins"></i> Balance:
                            <span class="balance-value">30000</span>
                        </p>
                        <p class="currency">
                            <i class="fa-solid fa-dollar-sign"></i> Currency:
                            <span class="currency-value">USD</span>
                        </p>
                        <p class="date">
                            <i class="fa-solid fa-calendar-days"></i> Creation date:
                            <span class="date-value">30-8-2021</span>
                        </p>
                    </div>
                </div>

                </div>
            </div>
        </div>
        <script src="{{ asset('js/accounts.js') }}"></script>
    </body>
</html>