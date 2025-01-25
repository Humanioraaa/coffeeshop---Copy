<?php

namespace App\Models;

use App\Models\OrderDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description', 'image_path'];

    public function OrderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
