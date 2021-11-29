<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'default',
        'holder',
        'number',
        'expiry_month',
        'expiry_year',
        'cvv'
    ];

    public function user()
    {
        $this->belongsToMany(User::class);
    }
}
