<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="card">
        <div class="left-side-container">
            <div class="statement">
                <h1> Welcome to your virtual bank </h1>
                <h3> A place that makes your financial life easier</h3>
            </div>  
            <img src="{{ asset('images/banking-illustration.png') }}" alt="Your Image">
        </div>

        <div class="right-side-container">
            <h2> Create an account </h2>
            <form action="/register" method="POST">
                <input type="text" name="fname" placeholder="First name">
                <input type="text" name="lname" placeholder="Last name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="cpassword" placeholder="Confirm password">
                <input type="submit" name="submit" value="Register">
            </form>
        <div>
    </div>
    
</body>
</html>