<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function createAccount(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'balance' => 'required',
            'currency' => 'required'
        ]);
    
        $user = auth()->user();    
        $account = new Account($data);
        $account->user()->associate($user);
        $account->save();

        return redirect('/pending');
    }

    public function updateAccountStatus(Request $request)
    {
        $accountId = $request->input('accountId');
        $status = $request->input('status');

        $account = Account::findOrFail($accountId);
        $account->status = $status;
        $account->save();
    }

    public function getAccountDetails($accountId){
        $account = Account::findOrFail($accountId);
        $user = User::findOrFail($account->user_id);
        $accounts = $user->userAccounts()->get();
        $transactions = $account->accountTransactions()->get();
        return view('account-details', ['account' => $account, 'user' => $user, 'accounts' => $accounts, 'transactions' => $transactions]);
    }

    public function getAccountDetailsAdmin($accountId){
        $account = Account::findOrFail($accountId);
        $user = User::findOrFail($account->user_id);
        $accounts = $user->userAccounts()->get();
        $transactions = $account->accountTransactions()->get();
        return view('user-account-details', ['account' => $account, 'user' => $user, 'accounts' => $accounts, 'transactions' => $transactions]);
    }

    public function updateAccountAvailability(Request $request)
    {
        $accountId = $request->input('accountId');
        $is_enabled = $request->input('is_enabled');

        $account = Account::findOrFail($accountId);
        $account->is_enabled = $is_enabled;
        $account->save();
    }

}
