<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/pending.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Pending Accounts</title>
    </head>
    <body>
        <nav>
            <div class="nav-container">
                <a class="title"> Pending Accounts </a>
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
                <a href="/accounts" class="button1">Your Accounts</a>


            </div><br>

            <div class="statement">
                <p>{{$accounts->where('status','pending')->count()}} Bank Accounts <p>
                @if($accounts->where('status', 'pending')->count() > 0)
                    <p class="statement1">Please be patient, an agent is reviewing your account creation request.</p>
                @else
                    <p class="statement1">Your pending accounts will appear here once creation request is sent</p>
                @endif
            </div>

            <div class="cards-container">
                @foreach($accounts as $account)
                    @if($account['status'] == 'pending')
                        <div class="card">
                            <div class="card-content">
                                <div class="card-title">{{$account['name']}}
                                    <span class="status-pending">Pending</span>
                                </div>
                                <p class="balance">
                                    <i class="fa-solid fa-coins"></i> Initial Balance:
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
                @endforeach

                @foreach($accounts as $account)
                    @if($account['status'] == 'rejected')
                        <div class="card">
                            <div class="card-content">
                                <div class="card-title">{{$account['name']}}
                                    <span class="status-rejected">Rejected</span>
                                </div>
                                <p class="balance">
                                    <i class="fa-solid fa-coins"></i> Initial Balance:
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
                @endforeach
            </div>
        </div>
        
    </body>
</html>