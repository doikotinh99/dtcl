<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "mana",
        "image",
        "description",
        "stats_id"
    ];

    public function SkillStat(){
        return $this->hasOne(SkillStat::class);
    }
}
