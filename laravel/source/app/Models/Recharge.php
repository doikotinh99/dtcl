<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id" ,
        "coint",
        "code",
        "type"
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function transaction(){
        return $this->morphMany(Transaction::class, "transactionable");
    }
}
