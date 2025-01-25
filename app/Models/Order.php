<?php

namespace App\Models;

use App\Models\OrderDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;


    protected $fillable = ['total_price', 'username', 'order_code', 'status'];

    public function OrderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function Review()
    {
        return $this->hasMany(Review::class, 'order_id', 'id');
    }
    public function logs()
    {
        return $this->hasMany(OrderLog::class);
    }

}
