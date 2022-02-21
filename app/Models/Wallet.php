<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $table = 'wallets';
    protected $fillable = ['user_id', 'balance'];
    public $timestamps = true;

    // create new wallet
    public static function createWallet($user_id)
    {
        $wallet = new Wallet();
        $wallet->user_id = $user_id;
        $wallet->balance = 0;
        $wallet->save();
    }
    // addBalance to wallet
    public static function addBalance($user_id, $amount)
    {
        $wallet = Wallet::where('user_id', $user_id)->first();
        $wallet->balance += $amount;
        $wallet->save();
    }
    // getBalance from wallet
    public static function getBalance($user_id)
    {
        $wallet = Wallet::where('user_id', $user_id)->first();
        return $wallet->balance;
    }

}
