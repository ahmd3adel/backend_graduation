<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'quantity' , 'price'];

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name'=>$this->name,
            'price'=>$this->price,
            'quantity'=>$this->quantity,
            'image'=>$this->images,
            'category' => $this->category,

        ];
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImages::class);
    }



}
