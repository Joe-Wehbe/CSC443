<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/users.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Users</title>
    </head>
    <body>
        <nav>
            <div class="nav-container">
                <a class="title"> Bank Users</a>
                <a href="/accounts">Home</a>
                <a href="">About</a>
                <a href="/logout">Logout</a>
            </div>
        </nav>

        <div class="container">
            <div class="search-container">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search user...">
                <a href="/user-requests" class="button">View account creation requests</a>
            </div><br>

            <div class="statement">
                <p>{{$users->where('is_admin','0')->count()}} Users<p>
                @if($users->where('is_admin','0')->count() > 0)
                    <p class="statement1">Click on a user to view their accounts.</p>
                @else
                    <p class="statement1">No users yet!</p>
                @endif
            </div>

            <div class="user-list">
                <ul class="user-list-items">
                    @foreach($users as $user)
                        @if(!$user->is_admin)
                            <a href="/user-accounts">
                                <li class="user-list-item">
                                    <div class="flex-container">
                                        <div class="fname">
                                            <span class="fname-data">First Name</span><br>
                                            <span class="fname-value">{{$user['first_name']}}</span>
                                        </div>
                                        <div class="lname">
                                            <span class="lname-data">Last Name</span><br>
                                            <span class="lname-value">{{$user['last_name']}}</span>
                                        </div>                                
                                        <div class="email">
                                            <span class="email-data">Email</span><br>
                                            <span class="email-value">{{$user['email']}}</span>
                                        </div>
                                    </div>
                                </li>
                            </a>
                        @endif
                    @endforeach        
                </ul>
            </div><br>
        </div>
    </body>
</html>