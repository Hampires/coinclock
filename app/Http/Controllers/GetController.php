<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;

class GetController extends Controller
{
    public function contract_address(Request $request)
    {
    	$contract_address = Wallet::where(['asset' => $request->input('asset')])->get();

    	return $contract_address;
    }
}
