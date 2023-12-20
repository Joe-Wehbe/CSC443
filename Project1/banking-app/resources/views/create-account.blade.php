<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Bank Account</title>
        <link rel="stylesheet" href="{{ asset('css/create-account.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>

    <body>
        <nav>
            <div class="nav-container">
                <a class="title"> Creating a bank account </a>
                <a href="/accounts">Home</a>
                <a href="/about">About</a>
                <a href="/logout">Logout</a>
            </div>
        </nav>
        <div class="statement1">
            <h1> Create a bank account </h1>
            <h3> Your account will be created once an agent approves your request </h3>
        </div>
        <div class="container">
            <div class="card">
                <div class="right-side-container">
                    <div class="statement2">
                        <h2> Enter account information </h2>
                        <h4> Fill in the fields below to create your account<h4>
                    </div>
                    <form action="/create-account" method="POST">
                        @csrf
                        <div class="input-container">
                            <i class="fa-solid fa-file-invoice"></i>
                            <input type="text" name="name" placeholder="Account name">
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-coins"></i>                    
                            <input type="number" name="balance" placeholder="Initial balance">
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-dollar-sign"></i>
                            <select name="currency">
                                <option value="lbp">LBP</option>
                                <option value="usd">USD</option>
                                <option value="eur">EUR</option>
                            </select>
                        </div>
                        <input type="submit" name="submit" value="Create account">
                    </form>
                </div>
            </div>
        </div>     
    </body>
</html>