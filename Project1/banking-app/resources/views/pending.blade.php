<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/pending.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Pending Accounts</title>
    </head>
    <body>
        <nav>
            <div class="nav-container">
                <a class="title"> Pending Accounts </a>
                <a href="/accounts">Home</a>
                <a href="">About</a>
                <a href="#">Logout</a>
            </div>
        </nav>

        <div class="container">
            <div class="search-container">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search accounts...">

                <a href="/create-account" class="button">Create Account</a>
                <a href="/accounts" class="button1">Your Accounts</a>


            </div><br>

            <div class="statement">
                <p>3 Bank Accounts <p>
                <p class="statement1">Please be patient, an agent is reviewing your account creation request.</p>
            </div>

            <div class="cards-container">
                <div class="card">
                    <div class="card-content">
                        <div class="card-title">First account
                            <span class="status-pending">Pending</span>
                        </div>
                        <p class="balance">
                            <i class="fa-solid fa-coins"></i> Initial Balance:
                            <span class="balance-value">30000</span>
                        </p>
                        <p class="currency">
                            <i class="fa-solid fa-dollar-sign"></i> Currency:
                            <span class="currency-value">USD</span>
                        </p>
                        <p class="date">
                            <i class="fa-solid fa-calendar-days"></i> Creation date:
                            <span class="date-value">N/A</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-title">Personal account
                            <span class="status-accepted">Accepted</span>
                        </div>
                        <p class="balance">
                            <i class="fa-solid fa-coins"></i> Initial Balance:
                            <span class="balance-value">30000</span>
                        </p>
                        <p class="currency">
                            <i class="fa-solid fa-dollar-sign"></i> Currency:
                            <span class="currency-value">USD</span>
                        </p>
                        <p class="date">
                            <i class="fa-solid fa-calendar-days"></i> Creation date:
                            <span class="date-value">N/A</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-title">First account
                            <span class="status-rejected">Rejected</span>
                        </div>
                        <p class="balance">
                            <i class="fa-solid fa-coins"></i> Initial Balance:
                            <span class="balance-value">30000</span>
                        </p>
                        <p class="currency">
                            <i class="fa-solid fa-dollar-sign"></i> Currency:
                            <span class="currency-value">USD</span>
                        </p>
                        <p class="date">
                            <i class="fa-solid fa-calendar-days"></i> Creation date:
                            <span class="date-value">N/A</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>