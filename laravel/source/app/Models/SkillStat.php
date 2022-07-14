<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillStat extends Model
{
    use HasFactory;
    protected $fillable = [
        "description",
        "index"

    ];
}
