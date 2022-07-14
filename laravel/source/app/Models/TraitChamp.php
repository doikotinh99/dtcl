<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraitChamp extends Model
{
    use HasFactory;
    protected $table = "traits";
    protected $fillable = [
        "name",
        "description",
        "image",
        "type"
    ];

    public function set(){
        return $this->hasMany(Set::class);
    }
}
