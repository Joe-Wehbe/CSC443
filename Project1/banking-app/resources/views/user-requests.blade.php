<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/user-requests.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Pending Requests</title>
    </head>
    <body>
        <nav>
            <div class="nav-container">
                <a class="title"> Account Creation Requests</a>
                <a href="/accounts">Home</a>
                <a href="">About</a>
                <a href="#">Logout</a>
            </div>
        </nav>

        <div class="container">
            <div class="search-container">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search user...">
            </div><br>

            <div class="statement">
                <p>3 Pending Requests<p>
                <p class="statement1">Users will be notified of your approval or rejection.</p>
            </div>

            <div class="user-list">
                <ul class="user-list-items">
                    <li class="user-list-item">
                        <div class="flex-container">
                            <div class="username">
                                <span class="username-data">Full Name</span><br>
                                <span class="username-value">John Doe</span>
                            </div>
                            <div class="email">
                                <span class="email-data">Email</span><br>
                                <span class="email-value">john.doe@lau.edu</span>
                            </div>                                
                            <div class="account">
                                <span class="account-data">Account Name</span><br>
                                <span class="account-value">Student account</span>
                            </div>
                            <div class="balance">
                                <span class="balance-data">Balance</span><br>
                                <span class="balance-value">30000</span>
                            </div>
                            <div class="currency">
                                <span class="currency-data">Currency</span><br>
                                <span class="currency-value">USD</span>
                            </div>
                            <div class="buttons">
                                <i class="fa-regular fa-circle-check" onclick="accept()"></i>
                                <i class="fa-solid fa-xmark" onclick="reject()"></i>                            
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div class="flex-container">
                            <div class="username">
                                <span class="username-data">Full Name</span><br>
                                <span class="username-value">John Doe</span>
                            </div>
                            <div class="email">
                                <span class="email-data">Email</span><br>
                                <span class="email-value">john.doe@lau.edu</span>
                            </div>                                
                            <div class="account">
                                <span class="account-data">Account Name</span><br>
                                <span class="account-value">Student account</span>
                            </div>
                            <div class="balance">
                                <span class="balance-data">Balance</span><br>
                                <span class="balance-value">30000</span>
                            </div>
                            <div class="currency">
                                <span class="currency-data">Currency</span><br>
                                <span class="currency-value">USD</span>
                            </div>
                            <div class="buttons">
                                <i class="fa-regular fa-circle-check" onclick="accept()"></i>
                                <i class="fa-solid fa-xmark" onclick="reject()"></i>                              
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div class="flex-container">
                            <div class="username">
                                <span class="username-data">Full Name</span><br>
                                <span class="username-value">John Doe</span>
                            </div>
                            <div class="email">
                                <span class="email-data">Email</span><br>
                                <span class="email-value">john.doe@lau.edu</span>
                            </div>                                
                            <div class="account">
                                <span class="account-data">Account Name</span><br>
                                <span class="account-value">Student account</span>
                            </div>
                            <div class="balance">
                                <span class="balance-data">Balance</span><br>
                                <span class="balance-value">30000</span>
                            </div>
                            <div class="currency">
                                <span class="currency-data">Currency</span><br>
                                <span class="currency-value">USD</span>
                            </div>
                            <div class="buttons">
                                <i class="fa-regular fa-circle-check" onclick="accept()"></i>
                                <i class="fa-solid fa-xmark" onclick="reject()"></i>                              
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <script src="{{ asset('js/user-requests.js') }}"></script>
    </body>
</html>