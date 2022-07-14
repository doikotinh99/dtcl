<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "package_id",
        "code",
        "start",
        "end",
        "statuts" 
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
    public function package(){
        return $this->hasOne(Package::class);
    }
    public function transaction(){
        return $this->morphMany(Transaction::class, "transactionable");
    }
}
