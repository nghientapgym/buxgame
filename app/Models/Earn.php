<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Earn extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'earn_points', 'earn_title', 'earn_payout', 'earn_status', 'offer_id', 'offer_name',
        'transaction_id','session_ip'
    ];

    //table
    protected $table = 'earns';
    //primary key
    protected $primaryKey = 'id';
    //timestamps
    public $timestamps = true;


}
