<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChampBuild extends Model
{
    use HasFactory;
    protected $fillable = [
        "star",
        "champ_id",
        "item1",
        "item2",
        "item3"
    ];

    public function champ(){
        return $this->hasOne(Champ::class);
    }

    public function item1(){
        return $this->hasOne(Item::class, "item1", "id");
    }

    public function item2(){
        return $this->hasOne(Item::class, "item2", "id");
    }

    public function item3(){
        return $this->hasOne(Item::class, "item3", "id");
    }
}
