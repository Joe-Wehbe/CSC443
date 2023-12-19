<?php

namespace App\Http\Controllers;

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

        return response()->json(['message' => 'Account status updated successfully']);
    }
}
