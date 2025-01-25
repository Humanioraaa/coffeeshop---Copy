<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::all();
        return view('review', compact('review'));
    }

    public function create($orderId)
    {
        $product = Product::findOrFail($orderId);

        return view('order.review', compact('product'));
    }

    public function store(Request $request, $productId)
    {
        $validatedData = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:255',
        ]);

        // Simpan review
        Review::create([
            'order_id' => $productId,
            'rating' => $validatedData['rating'],
            'comment' => $validatedData['comment'],
        ]);

        return redirect()->route('order.show', $productId)->with('success', 'Review added successfully!');
    }
}
