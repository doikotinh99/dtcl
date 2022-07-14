<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChampStat extends Model
{
    use HasFactory;
    protected $fillable = [
        "health",
        "mana",
        "starting_mana",
        "armor",
        "mr",
        "dps",
        "damage",
        "spd",
        "crit",
        "range"
    ];
}
