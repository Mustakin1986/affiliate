<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable =['title','slug','photo','Summary','is_parent','parent_id','status'];

    public function products()
    {
     return $this->hasMany(Product::class);
    }

}
