<?php

namespace App\Http\Controllers;
use App\Models\Wallet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        //get balance of user
        $balance = Wallet::where('user_id', auth()->user()->id)->first();
        return view('home.index', compact('balance'));
    }
}
