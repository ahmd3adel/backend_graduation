<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function products()
    {
        return $this->hasMany(Product::class , 'category_id');
    }

//    public function toArray()
//    {
//        return [
//            'id' => $this->id,
//            'name'=>$this->name,
//            'description'=>$this->description,
//            'status'=>$this->status,
////            'products'=>$this->products,
//        ];
//    }

}
