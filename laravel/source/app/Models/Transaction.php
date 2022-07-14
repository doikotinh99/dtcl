<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        "time",
        "quanlity",
        "from",
        "to",
        "transactiontable_id",
        "transactiontable_type"
    ];

    public function transactionable(){
        return $this->morphTo();
    }
}
