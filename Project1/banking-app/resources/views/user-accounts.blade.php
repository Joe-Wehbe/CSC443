<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/user-accounts.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>User Accounts</title>
    </head>
    <body>
        <nav>
            <div class="nav-container">
                <a class="title"> Joe's Accounts </a>
                <a href="/accounts">Home</a>
                <a href="">About</a>
                <a href="/logout">Logout</a>
            </div>
        </nav>

        <div class="container">
            <div class="search-container">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search accounts...">
            </div><br>

            <div class="statement">
                <p>4 Bank Accounts <p>
                <p class="statement1">Click on an account for transaction details.</p>
            </div>

            <div class="cards-container">
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
                        <div class="card-title">Family account</div>
                        <p class="balance">
                            <i class="fa-solid fa-coins"></i> Balance:
                            <span class="balance-value">30000</span>
                        </p>
                        <p class="currency">
                            <i class="fa-solid fa-dollar-sign"></i> Currency:
                            <span class="currency-value">LBP</span>
                        </p>
                        <p class="date">
                            <i class="fa-solid fa-calendar-days"></i> Creation date:
                            <span class="date-value">30-8-2021</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-title">Work account</div>
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
        <script src="{{ asset('js/user-accounts.js') }}"></script>
    </body>
</html>