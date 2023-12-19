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

        $transaction = new Transaction([
            'deposit' => $data['deposit_amount'],
            'withdrawal' => 0,
        ]);

        $account->accountTransactions()->save($transaction);
        return redirect("/account-details/{$data['accountId']}");
    }
}
