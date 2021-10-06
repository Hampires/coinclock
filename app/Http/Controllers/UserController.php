<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Models\Asset;
use App\Models\Referral;
use App\Models\Transaction;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $assets = Asset::get();
        return view('dashboard', ['assets' => $assets]);
    }

    public function asset()
    {
        $assets = Asset::get();
        return view('asset', ['assets' => $assets]);
    }

    public function wallet($asset_sort)
    {
        $asset = Asset::where(['sort_name' => $asset_sort])->get();
        $transactions = Transaction::where(['asset' => $asset_sort, 'type' => 'asset'])->get();

        return view('wallet', ['asset' => $asset[0], 'transactions' => $transactions]);
    }

    public function wallet_send()
    {
        $assets = Asset::get();
        return view('wallet-send', ['assets' => $assets]);
    }

    public function wallet_receive()
    {
        $assets = Asset::get();
        return view('wallet-receive', ['assets' => $assets]);
    }

    public function referral()
    {
        $referrals = Auth::user()->referrals;
        $refer_bonuses = 0.00;
        foreach ($referrals as $referral) {
             $refer_bonuses = $refer_bonuses + $referral->reward; 
        }

        $assets = Asset::get();
        return view('referral', ['assets' => $assets, 'refer_bonuses' => $refer_bonuses]);
    }

    public function invite($username)
    {
       //
    }

    public function contract_history()
    {
        $transactions = Transaction::where(['type' => 'contract'])->get();

        return view('contract-history', ['transactions' => $transactions]);
    }

    public function profile()
    {
        return view('profile', ['user' => Auth::user()]);
    }

    public function profile_update(Request $request)
    {
        $response = ['status' => 'error', 'message' => 'Couldn\'t update profile' ];

        $user = Auth::user();

        if ($user->created_at != $user->updated_at) {
            $response['message'] = "User profile cannot be modify";
            return $response;
        }

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->save();

        $response['status'] = "success";
        $response['message'] = "User profile has been saved";

        return $response;
    }

    public function password_change(Request $request)
    {
        $response = ['status' => 'error', 'message' => 'Couldn\'t change password'];

        $user = Auth::user();

        if ($request->input('new_password') != $request->input('confirm_password')) {
            $response['message'] = "Passwords do not match";
            return $response;
        }

        return $response;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
