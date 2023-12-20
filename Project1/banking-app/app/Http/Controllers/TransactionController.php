<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

 
    public function deposit(Request $request)
    {
        $data = $request->validate([
            'deposit_amount' => 'required|numeric|min:0',
            'accountId' => 'required|exists:accounts,id',
        ]);
    
        $account = Account::findOrFail($data['accountId']);
    
        $currentBalance = $account->balance;
        $newBalance = $currentBalance + $data['deposit_amount'];
    
        $transaction = new Transaction([
            'deposit' => $data['deposit_amount'],
            'withdrawal' => 0,
        ]);
        $transaction->balance = $newBalance;
    
        $account->accountTransactions()->save($transaction);
        $account->balance = $newBalance;
        $account->save();
    
        return redirect("/account-details/{$data['accountId']}");
    }

    public function withdraw(Request $request)
    {
        $data = $request->validate([
            'withdraw_amount' => 'required|numeric|min:0',
            'accountId' => 'required|exists:accounts,id',
        ]);
    
        $account = Account::findOrFail($data['accountId']);
    
        $currentBalance = $account->balance;
        $newBalance = $currentBalance - $data['withdraw_amount'];
    
        $transaction = new Transaction([
            'withdrawal' => $data['withdraw_amount'],
            'deposit' => 0,
        ]);
        $transaction->balance = $newBalance;
    
        $account->accountTransactions()->save($transaction);
        $account->balance = $newBalance;
        $account->save();
    
        return redirect("/account-details/{$data['accountId']}");
    }
    
    
}
