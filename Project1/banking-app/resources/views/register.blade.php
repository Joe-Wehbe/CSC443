<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>

    <body style="background-image: url('{{ asset('images/background1.jpg') }}');">
        <nav>
            <div class="nav-container">
                <a class="title"> Creating an account </a>
                <a href="/">Signup</a>
                <a href="/login">Signin</a>
                <a href="#">About</a>
            </div>
        </nav>
        <div class="container">

            <div class="card">
                <div class="left-side-container">
                    <div class="statement1">
                        <h1> Welcome to your virtual bank </h1>
                        <h3> A place that makes your financial life easier</h3>
                    </div>  
                    <img src="{{ asset('images/banking-illustration.png') }}" alt="Img">
                </div>

                <div class="right-side-container">
                    <div class="statement2">
                        <h2> Create an account </h2>
                        <h4> Take the first step towards secure and convenient banking <h4>
                    </div>
                    <form action="/register" method="POST">
                        @csrf
                        <div class="input-container">
                            <i class="fa fa-user"></i>
                            <input type="text" name="fname" placeholder="First name">
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-users"></i>                    
                        <input type="text" name="lname" placeholder="Family name">
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-lock"></i>                    
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-circle-check"></i>                    
                            <input type="password" name="cpassword" placeholder="Confirm password"><br>
                        </div>
                        <input type="submit" name="submit" value="Register">
                        <a href="/login">Already a member? Login </a>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>