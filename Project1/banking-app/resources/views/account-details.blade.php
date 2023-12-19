<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/account-details.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Account Details</title>
    </head>
    <body>
        <nav>
            <div class="nav-container">
                <a class="title"> Viewing Account Details</a>
                <a href="/accounts">Home</a>
                <a href="">About</a>
                <a href="/logout">Logout</a>
            </div>
        </nav>

        <div class="container">
            <div class="search-container">

                <button class="button2" onclick="openDepositModal()">Deposit</button>
                <div id="deposit-modal-container">
                    <div class="deposit-modal-content">
                        <form id="deposit-form" action="/deposit" method="POST">
                            @csrf
                            <p>Enter the amount to deposit</p>
                            <input type="number" name="deposit_amount" placeholder="Amount" required>
                            <input type="hidden" name="accountId" value="{{$account['id']}}">
                            <button type="submit">Deposit</button>
                            <button type="button" onclick="closeDepositModal()">Cancel</button>
                        </form>
                    </div>
                </div>


                <button class="button3" onclick="openWithdrawModal()">Withdraw</button>
                <div id="withdraw-modal-container">
                    <div class="withdraw-modal-content">
                        <p>Enter the amount to withdraw</p>
                        <input type="number" name="withdraw-amount" placeholder="Amount"></input>
                        <button onclick="">Withdraw</button>
                        <button onclick="closeWithdrawModal()">Cancel</button>
                    </div>
                </div>

                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search transaction date...">

                <button class="button" onclick="openToModal()">Transfer to</button>
                <div id="to-modal-container">
                    <div class="to-modal-content">
                        <p>Choose the account to transfer to</p>
                        <select name="account">
                            <option value="acc1">First Account</option>
                            <option value="acc2">Family Account</option>
                        </select>
                        <p>Enter the amount to transfer</p>
                        <input type="number" name="to-amount" placeholder="Amount"></input>
                        <button onclick="">Transfer</button>
                        <button onclick="closeToModal()">Cancel</button>
                    </div>
                </div>

                <button class="button1" onclick="openFromModal()">Transfer from</button>
                <div id="from-modal-container">
                    <div class="from-modal-content">
                        <p>Choose the account to transfer from</p>
                        <select name="account">
                            <option value="acc1">First Account</option>
                            <option value="acc2">Family Account</option>
                        </select>
                        <p>Enter the amount to transfer</p>
                        <input type="number" name="from-amount" placeholder="Amount"></input>
                        <button onclick="">Cancel</button>
                        <button onclick="closeFromModal()">Cancel</button>
                    </div>
                </div>
                
            </div>

            <div class="inner-container">
                <div class="view-card">
                    <span class="viewing">Viewing account</span>
                    <div class="card-content"> 
                        <div class="card-title">{{$account['name']}}
                            <i class="fa-solid fa-trash" onclick="confirmDelete()"></i>
                        </div>

                        <div class="personal-info">Personal information</div>
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
                        <tr>
                            <td>Row 1, Cell 1</td>
                            <td>Row 1, Cell 2</td>
                            <td>Row 1, Cell 3</td>
                            <td>Row 1, Cell 4</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="other-accounts-container">Other accounts
                    @foreach($accounts as $otherAccount)
                        @if($otherAccount['id'] != $account['id'])
                            <div class="card">
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
        <script src="{{ asset('js/account-details.js') }}"></script>
    </body>
</html>