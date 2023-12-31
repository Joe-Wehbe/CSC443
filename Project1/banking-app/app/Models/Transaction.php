<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'deposit',
        'withdrawal',
    ];

    public function account() {
        return $this->belongsTo(Account::class);
    }
}
