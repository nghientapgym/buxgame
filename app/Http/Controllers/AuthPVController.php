<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AuthPVController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    // create function login only username
    public function login(Request $request){
        $username = $request->username;
        $user= User::where('username', $username)->first();
        // if empty user
        if(empty($user)){
            $check = $this->RobloxLogin($request);
            // if check is true register
            if($check){
                $this->register($request);
                $user= User::where('username', $username)->first();
                $wallet = Wallet::create([
                    'user_id' => $user->id,
                    'balance' => 0,
                ]);
            }else{
                return response()->json(['error' => 'Roblox username not found'], 404);
            }
        }
        Auth::login($user, true);
        return redirect()->route('home');
    }

    // register
    public function register(Request $request){
        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make('saovoiddeptraivay'),
        ]);
        // create wallet

    }
    // roblox check username
    public function RobloxLogin(Request $request){
        //get username from $request
        try {
            $username = $request->input('username');
            // http get request to get user id
            $url = "https://api.roblox.com/users/get-by-username?username=".$username;
            $response = Http::get($url);
            return $response->json()['Id'];
        } catch (\Exception $e) {
            return false;
        }
    }
    //logout


}
