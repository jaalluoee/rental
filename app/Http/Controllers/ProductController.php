<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $results = Warehouse::paginate(20);
        return view('product.index', compact('results'));
    }

    public function show($id) 
    {
        $data = Warehouse::find($id);
        $warehouse=Warehouse::all();
        return view('product.show', compact('data', 'warehouse'));
        
    }

    public function order()
    {
        return view('product.create');
    }

    public function createOrder(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'duration'=>'required',
            'description'=>'required',
        ]);
        Order::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'warehouse_id'=>$request->transportation,
            'duration'=>$request->duration,
            'description'=>$request->description,
        ]);

        return back()->with('message', 'Terima Kasih Sudah Memesan. Pihak Admin kami akan segera menghubungi anda, Mohon ditunggu.');
    }
}
