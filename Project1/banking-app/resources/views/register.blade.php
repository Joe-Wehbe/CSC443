<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="card">
    <img src="{{ asset('images/banking-illustration.png') }}" alt="Your Image">
        <div class="right-side-container">
            <h1> Welcome to Bank Manager </h1>
            <h4> A place that makes you financial life easier</h4>
            <form action="/register" method="POST">
                <input type="text" name="fname" placeholder="First name">
                <input type="text" name="lname" placeholder="Last name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Register">
            </form>
        <div>
    </div>
    
</body>
</html>