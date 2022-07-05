<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $results = Order::paginate(20);
        return view('Order.index', compact('results'));
    }

    public function show($id)
    {
        $result = Order::with('product')->findOrFail($id);
        return view('order.show', compact('result'));
    }

    public function destroy($id)
    {
        try {
            $data = Order::findOrFail($id);
            $data->delete();
            return redirect()->route('order.index');
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
}
