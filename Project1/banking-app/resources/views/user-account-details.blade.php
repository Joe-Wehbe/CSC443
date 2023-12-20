<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/user-account-details.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <title>User Account Details</title>
    </head>
    <body>
        <nav>
            <div class="nav-container">
                <a class="title"> Viewing Account Details</a>
                <a href="/accounts">Home</a>
                <a href="#">About</a>
                <a href="/logout">Logout</a>
            </div>
        </nav>

        <div class="container">
            <div class="search-container">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search transaction date...">
                <button class="button" onclick="disableAccount({{$account->id}})">Disable Account</button>
            </div>

            <div class="inner-container">
                <div class="view-card">
                    <span class="viewing">Viewing Account</span>
                    <div class="card-content"> 
                        <div class="card-title">{{$account['name']}}
                        </div>

                        <div class="personal-info">User information</div>
                        <p class="first-name">
                            <i class="fa fa-user"></i> 
                            <span class="fname">First Name:</span>
                            <span class="fname-value">{{$user['first_name']}}</span>
                        </p>
                        <p class="last-name">
                            <i class="fa-solid fa-users"></i>
                            <span class="lname">Last Name:</span>
                            <span class="lname-value">{{$user['last_name']}}</span>
                        </p>
                        <p class="e-mail">
                            <i class="fa-solid fa-envelope"></i> 
                            <span class="email">Email:</span>
                            <span class="email-value">{{$user['email']}}</span>
                        </p><br>

                        <div class="personal-info">Account information</div>
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
                            <span class="date-value">{{ $account['created_at']->format('Y-m-d') }}</span>
                        </p>
                    </div>
                </div>

                <div class="transactions-container"> Transactions history
                    <table>
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Withdrawals</th>
                            <th>Deposits</th>
                            <th>Balance</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions->reverse() as $transaction)
                        <tr>
                            <td>{{$transaction['created_at']}}</td>

                            @if($transaction['withdrawal'] > 0)
                                <td class="red">{{$transaction['withdrawal']}}</td>
                            @else
                                <td>{{$transaction['withdrawal']}}</td>
                            @endif

                            @if($transaction['deposit'] > 0)
                                <td class="green">{{$transaction['deposit']}}</td>
                            @else
                                <td> {{$transaction['deposit']}}</td>
                            @endif

                            @if($transaction['deposit'] > $transaction['withdrawal'])
                                <td class="green">{{$transaction['balance']}}</td>
                            @else
                                <td class="red">{{$transaction['balance']}}</td>
                            @endif
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="other-accounts-container">Other accounts
                @foreach($accounts as $otherAccount)
                    @if($otherAccount['id'] != $account['id'])
                        <div class="card" data-account-id="{{$otherAccount['id']}}">
                            <div class="card-content">
                                <div class="card-title">{{ $otherAccount['name']}}</div>
                                <p class="balance">
                                    <i class="fa-solid fa-coins"></i> Balance:
                                    <span class="balance-value">{{$otherAccount['balance']}}</span>
                                </p>
                                <p class="currency">
                                    <i class="fa-solid fa-dollar-sign"></i> Currency:
                                    <span class="currency-value">{{$otherAccount['currency']}}</span>
                                </p>
                                <p class="date">
                                    <i class="fa-solid fa-calendar-days"></i> Creation date:
                                    <span class="date-value">{{ $otherAccount['created_at']->format('Y-m-d') }}</span>
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
        <script src="{{ asset('js/user-account-details.js') }}"></script>
    </body>
</html>