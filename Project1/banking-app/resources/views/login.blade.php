<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>

    <body style="background-image: url('{{ asset('images/background1.jpg') }}');">

        @auth
            <script>window.location = "{{ url('/accounts') }}";</script>
        @else
        <nav>
            <div class="nav-container">
                <a class="title"> Logging in </a>
                <a href="/register">Signup</a>
                <a href="/login">Signin</a>
                <a href="#">About</a>
            </div>
        </nav>
        <div class="container">

            <div class="card">
                <div class="left-side-container">
                    <div class="statement1">
                        <h1> Welcome back </h1>
                        <h3> Glad to see you again!</h3>
                    </div>  
                    <img src="{{ asset('images/banking-illustration.png') }}" alt="Img">
                </div>

                <div class="right-side-container">
                    <div class="statement2">
                        <h2> Log into your account </h2>
                        <h4> Manage your bank accounts, check your balance, transfer money, and much more! <h4>
                    </div>
                    <form action="/accounts" method="POST">
                        @csrf
                        <div class="input-container">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-lock"></i>                    
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <input type="submit" name="submit" value="Login">
                        <a href="/register">Don't have an account? Register </a>
                    </form>
                </div>
            </div>
        </div>
        @endauth
    </body>
</html>