<?php

namespace App\Models;

use http\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','product_id', 'quantity'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

