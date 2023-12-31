<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    public function user()
{
    return $this->belongsTo(User::class);
}

public function orders()
{
    return $this->hasMany(Order::class);
}

}

