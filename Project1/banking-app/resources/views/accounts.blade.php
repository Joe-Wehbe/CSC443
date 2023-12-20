<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/accounts.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Your Accounts</title>
    </head>
    <body>
        <nav>
            <div class="nav-container">
                <a class="title"> Your Accounts </a>
                <a href="/accounts">Home</a>
                <a href="">About</a>
                <a href="/logout">Logout</a>
            </div>
        </nav>

        <div class="container">
            <div class="search-container">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search accounts...">

                <a href="/create-account" class="button">Create Account</a>
                <a href="/pending" class="button1">Pending Accounts</a>

            </div><br>

            <div class="statement">
                <p>{{$accounts->where('status','accepted')->count()}} Bank Accounts <p>
                @if($accounts->where('status', 'accepted')->count() > 0)
                    <p class="statement1">Click on an account for transaction details.</p>
                @else
                    <p class="statement1">Your accounts will appear here once created and approved.</p>
                @endif
            </div>

            <div class="cards-container">
                @foreach($accounts as $account)
                    @if($account['status'] == 'accepted')
                        @if($account['is_enabled'] == '1')
                            <div class="card" data-account-id="{{$account['id']}}">
                                <div class="card-content">
                                    <div class="card-title">{{$account['name']}}</div>
                                    <p class="balance">
                                        <i class="fa-solid fa-coins"></i> Balance:
                                        <span class="balance-value">{{$account['balance']}}</span>
                                    </p>
                                    <p class="currency">
                                        <i class="fa-solid fa-dollar-sign"></i> Currency:
                                        <span class="currency-value">{{$account['currency']}}</span>
                                    </p>
                                    <p class="date">
                                        <i class="fa-solid fa-calendar-days"></i> Creation date:
                                        <span class="date-value">{{$account['created_at']}}</span>
                                    </p>
                                </div>
                            </div>
                        @else
                            <div class="card-disabled">
                                <div class="card-content">
                                    <div class="card-title">{{$account['name']}} (Disabled)</div>
                                    <p class="balance">
                                        <i class="fa-solid fa-coins"></i> Balance:
                                        <span class="balance-value">{{$account['balance']}}</span>
                                    </p>
                                    <p class="currency">
                                        <i class="fa-solid fa-dollar-sign"></i> Currency:
                                        <span class="currency-value">{{$account['currency']}}</span>
                                    </p>
                                    <p class="date">
                                        <i class="fa-solid fa-calendar-days"></i> Creation date:
                                        <span class="date-value">{{$account['created_at']}}</span>
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <script src="{{ asset('js/accounts.js') }}"></script>
    </body>
</html>