<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $order = Order::with('orderDetails')->paginate(6);
        return view('order.admin.index', compact('order'));
    }
}
