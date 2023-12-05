<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="{{ asset('css/create-account.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>

    <body style="background-image: url('{{ asset('images/background1.jpg') }}');">
        <nav>
            <div class="nav-container">
                <a class="title"> Creating a bank account </a>
                <a href="/accounts">Home</a>
                <a href="#">About</a>
                <a href="#">Logout</a>
            </div>
        </nav>
        <div class="container">

            <div class="card">
                <div class="left-side-container">
                    <div class="statement2">
                        <h2> Verify your Identity </h2>
                        <h4> This is a necessary step for improved account security <h4>
                    </div>
                    <form action="/register" method="POST">
                        <div class="input-container">
                            <i class="fa fa-user"></i>
                            <input type="text" name="fname" placeholder="First name">
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-lock"></i>                    
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <input type="submit" name="submit" value="Verify">
                    </form>
                </div>

                <div class="right-side-container">
                    <div class="statement2">
                        <h2> Enter account information </h2>
                        <h4> Fill in the fields below to create your account<h4>
                    </div>
                    <form action="/register" method="POST">
                        <div class="input-container">
                            <i class="fa-solid fa-file-invoice"></i>
                            <input type="text" name="aname" placeholder="Account name">
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-coins"></i>                    
                        <input type="text" name="balance" placeholder="Initial balance">
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-dollar-sign"></i>
                            <input type="email" name="currency" placeholder="Currency">
                        </div>
                        <input type="submit" name="submit" value="Create">
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>