<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Champ extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "cost",
        "image",
        "traits_id",
        "skill_id",
        "stats_id"
    ];

    public function traits(){
        return $this->hasMany(TraitChamp::class);
    }

    public function skill(){
        return $this->hasOne(Skill::class);
    }

    public function stats(){
        return $this->hasOne(ChampStat::class);
    }
}
