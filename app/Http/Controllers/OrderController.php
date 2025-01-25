<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderLog;
use Illuminate\Http\Request;
use App\Models\OrderStatusLog;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::with('orderDetails')->paginate(6);
        return view('order.admin.index', compact('order'));
    }

    public function create()
    {
        $product = Product::all();
        return view('order.create', compact('product'));
    }

    /*
    //Store Order TO Database
    */
    public function store(Request $request)
    {
        $products = collect($request->input('products'))->filter(function ($product) {
            return isset($product['id']) && isset($product['quantity']) && $product['quantity'] > 0;
        });

        if ($products->isEmpty()) {
            return redirect()->back()->withErrors(['products' => 'No valid products selected.']);
        }

        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
        ]);

        $order = Order::create([
            'username' => $validatedData['username'],
            'order_code' => strtoupper('ORD-' . uniqid()),
            'total_price' => 0,
            'status' => 'unpaid',
        ]);

        $totalPrice = 0;

        foreach ($products as $productData) {
            $product = Product::findOrFail($productData['id']);
            $quantity = $productData['quantity'];
            $subtotal = $product->price * $quantity;

            $order->orderDetails()->create([
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $product->price,
                'subtotal' => $subtotal,
            ]);

            $totalPrice += $subtotal;
        }

        $order->update(['total_price' => $totalPrice]);

        session()->forget('cart');

        return redirect()->route('order.edit', $order->id)->with('success', 'Order created successfully!');
    }


    /*
    //Render order track
    */
    public function show($id)
    {
        $order = Order::with('OrderDetails.product')->findOrFail($id);
        $orderLogs = OrderLog::where('order_id', $order->id)->orderBy('created_at', 'asc')->get();

        return view('order.show', compact('order', 'orderLogs'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('order.payment', compact('order'));
    }

    /*
    //Update Order Status
    */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required',
        ]);

        $order = Order::findOrFail($id);
        $order->update([
            'status' => $validatedData['status'],
        ]);

        if (auth()->check() && auth()->user()->hasRole('admin')) {
            return redirect()->back()->with('success', 'Order status updated successfully!');
        }

        return redirect()->route('order.index', $order->id)->with('success', 'Order marked as paid!');
    }


    public function destroy(string $id)
    {
        //
    }
}
