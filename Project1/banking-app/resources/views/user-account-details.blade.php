<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/user-account-details.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>User Account Details</title>
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
                <button class="button" onclick="disableAccount()">Disable Account</button>
            </div>

            <div class="inner-container">
                <div class="view-card">
                    <span class="viewing">Viewing Account</span>
                    <div class="card-content"> 
                        <div class="card-title">First account
                        </div>

                        <div class="personal-info">User information</div>
                        <p class="first-name">
                            <i class="fa fa-user"></i> 
                            <span class="fname">First Name:</span>
                            <span class="fname-value">Joe</span>
                        </p>
                        <p class="last-name">
                            <i class="fa-solid fa-users"></i>
                            <span class="lname">Last Name:</span>
                            <span class="lname-value">Wehbe</span>
                        </p>
                        <p class="e-mail">
                            <i class="fa-solid fa-envelope"></i> 
                            <span class="email">Email:</span>
                            <span class="email-value">joe.wehbe@lau.edu</span>
                        </p><br>

                        <div class="personal-info">Account information</div>
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

                <div class="other-accounts-container">Other accounts
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
        <script src="{{ asset('js/user-account-details.js') }}"></script>
    </body>
</html>