<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giveaway extends Model
{
    use HasFactory;
    protected $table = 'giveaways';
    protected $fillable = ['giveaway_name', 'giveaway_description', 'giveaway_points'];
    public $timestamps = true;
}
