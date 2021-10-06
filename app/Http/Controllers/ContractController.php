<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Auth;
use App\Models\Contract;
use App\Models\Wallet;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function make(Request $request)
    {
    	$user = Auth::user();
    	$asset = $request->post('asset');
    	$wallet_address = $request->post('wallet_address');
    	$amount = $request->post('amount');

        $contract_exist = Contract::where(['owner' => $user->email])->get(1);

        if (count($contract_exist) > 0 && $contract_exist[0]->asset == $asset) {
            $message = "You can only top up your " . $contract_exist[0]->asset . " Contract. One asset at a time";
            return $message;
        }

    	$contract_address = Wallet::where(['asset' => $asset, 'type' => 'contract'])->get();

    	$exist_transaction = Transaction::where(['asset' => $asset, 'from_owner' => $user->email, 'amount' => $amount])->get();

    	if (count($exist_transaction) > 0) {
    		$message = "Transaction already exist. Wait for cancellation or success status";
    		return $message;
    	}

    	if (count($contract_address) == 0 || $contract_address[0]->active == false) {
    		$message = "No contract available for now. Try again later";
    		return $message;
    	}

    	$transaction = Transaction::create([
    		'type' => 'contract',
    		'amount' => $amount,
    		'asset' => $asset,
    		'desc' => 'contract deposit',
    		'receiver' => $contract_address[0]->address,
    		'to_owner' => 'Tick Contract',
    		'sender' => $wallet_address,
    		'from_owner' => $user->email,
    		'status' => 'pending'
    	]);

    	return $transaction;
    }

    public function make_signature(Transaction $transaction)
    {
        $user = Auth::user();
        $transaction->status = "approved";
        $transaction->save();
        if ($transaction->status == "approved") {
            $contract = Contract::create([
                'capital' => $transaction->amount,
                'ticked' => 0,
                'balance' => $transaction->amount,
                'owner' => $user->email,
                'withdrawn' => 0,
                'active' => true,
            ]);
            return $contract;
        }
        else {
            $message = "Transaction rejected";
            return $message;
        }
    }
}
