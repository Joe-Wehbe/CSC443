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

    public function transferTo(Request $request)
    {
        $data = $request->validate([
            'to_amount' => 'required|numeric|min:0',
            'to_account' => 'required|exists:accounts,id',
            'accountId' => 'required|exists:accounts,id',
        ]);
    
        $senderAccount = Account::findOrFail($data['accountId']);    
        $receiverAccount = Account::findOrFail($data['to_account']);
        $transferAmount = $data['to_amount'];
    
        $senderCurrentBalance = $senderAccount->balance;
        $senderNewBalance = $senderCurrentBalance - $transferAmount;
    
        $senderTransaction = new Transaction([
            'withdrawal' => $transferAmount,
            'deposit' => 0,
        ]);
        $senderTransaction->balance = $senderNewBalance;
    
        $senderAccount->accountTransactions()->save($senderTransaction);
        $senderAccount->balance = $senderNewBalance;
        $senderAccount->save();
    
        $receiverCurrentBalance = $receiverAccount->balance;
        $receiverNewBalance = $receiverCurrentBalance + $transferAmount;
    
        $receiverTransaction = new Transaction([
            'deposit' => $transferAmount,
            'withdrawal' => 0,
        ]);
        $receiverTransaction->balance = $receiverNewBalance;
    
        $receiverAccount->accountTransactions()->save($receiverTransaction);
        $receiverAccount->balance = $receiverNewBalance;
        $receiverAccount->save();
    
        return redirect("/account-details/{$data['accountId']}");
    }

    public function transferFrom(Request $request){

        $data = $request -> validate([
            'from_amount' => 'required|numeric|min:0',
            'from_account' => 'required|exists:accounts,id',
            'accountId' => 'required|exists:accounts,id',
        ]);

        $receiverAccount = Account::findOrFail($data['accountId']);
        $senderAccount = Account::findOrFail($data['from_account']);
        $transferAmount = $data['from_amount'];

        $receiverCurrentBalance = $receiverAccount->balance;
        $receiverNewBalance = $receiverCurrentBalance + $transferAmount;

        $receiverTransaction = new Transaction([
            'deposit' => $transferAmount,
            'withdrawal' => 0,
        ]);
        $receiverTransaction->balance = $receiverNewBalance;

        $receiverAccount->accountTransactions()->save($receiverTransaction);
        $receiverAccount->balance = $receiverNewBalance;
        $receiverAccount->save();

        $senderCurrentBalance = $senderAccount->balance;
        $senderNewBalance = $senderCurrentBalance - $transferAmount;

        $senderTransaction = new Transaction([
            'deposit' => 0,
            'withdrawal' => $transferAmount,
        ]);
        $senderTransaction->balance = $senderNewBalance;

        $senderAccount->accountTransactions()->save($senderTransaction);
        $senderAccount->balance = $senderNewBalance;
        $senderAccount->save();

        return redirect("/account-details/{$data['accountId']}");
    }
}
