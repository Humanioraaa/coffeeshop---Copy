<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['order_id','product_id', 'rating', 'comment'];

    public function Order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }


}
