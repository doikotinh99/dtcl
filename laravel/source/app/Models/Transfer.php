<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $fillable = [
        "from",
        "to",
        "quanlity",
        "code",
        "time",
        "action" 
    ];

    public function userFrom(){
        return $this->hasOne(User::class, "from", "id");
    }
    public function userTo(){
        return $this->hasOne(User::class, "To", "id");
    }
    public function transaction(){
        return $this->morphMany(Transaction::class, "transactionable");
    }
}
