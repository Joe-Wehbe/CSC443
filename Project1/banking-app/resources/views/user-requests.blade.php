<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/user-requests.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="{{ asset('js/user-requests.js') }}"></script>
        <title>Pending Requests</title>
    </head>
    <body>
        <nav>
            <div class="nav-container">
                <a class="title"> Account Creation Requests</a>
                <a href="/accounts">Home</a>
                <a href="">About</a>
                <a href="/logout">Logout</a>
            </div>
        </nav>

        <div class="container">
            <div class="search-container">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search user...">
            </div><br>

            <div class="statement">
                <p>{{$accounts->where('status','pending')->count()}} Pending Requests<p>
                @if($accounts->where('status', 'pending')->count() > 0)
                    <p class="statement1">Users will be notified of your approval or rejection.</p>
                @else
                    <p class="statement1">No pending requests!</p>
                @endif

            </div>

            <div class="user-list">
                <ul class="user-list-items">
                    @foreach($users as $user)
                        @foreach($user->userAccounts as $account)
                            @if($account['status'] == 'pending')
                                <li class="user-list-item">
                                    <div class="flex-container">
                                        <div class="username">
                                            <span class="username-data">Full Name</span><br>
                                            <span class="username-value">{{$user['first_name']}} {{$user['last_name']}}</span>
                                        </div>
                                        <div class="email">
                                            <span class="email-data">Email</span><br>
                                            <span class="email-value">{{$user['email']}}</span>
                                        </div>                                
                                        <div class="account">
                                            <span class="account-data">Account Name</span><br>
                                            <span class="account-value">{{$account['name']}}</span>
                                        </div>
                                        <div class="balance">
                                            <span class="balance-data">Balance</span><br>
                                            <span class="balance-value">{{$account['balance']}}</span>
                                        </div>
                                        <div class="currency">
                                            <span class="currency-data">Currency</span><br>
                                            <span class="currency-value">{{$account['currency']}}</span>
                                        </div>
                                        <div class="buttons">
                                            <i class="fa-regular fa-circle-check" onclick="accept({{$account->id}})"></i>
                                            <i class="fa-solid fa-xmark" onclick="reject({{$account->id}})"></i>                            
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>