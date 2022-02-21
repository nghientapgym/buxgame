<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiveawayHistory extends Model
{
    use HasFactory;
    protected $table = 'giveaway_history';
    protected $fillable = ['giveaway_id', 'user_id', 'points','status'];
    public $timestamps = true;
}
