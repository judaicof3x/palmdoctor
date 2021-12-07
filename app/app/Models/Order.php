<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'plan_id',
        'status',
        'ipag_id',
        'starting_at',
        'expires_at',
        'method'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function plan()
    {
        $this->hasOne(Plan::class);
    }
}
