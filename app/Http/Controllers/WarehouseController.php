<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Warehouse::paginate(20);
        return view('warehouse.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warehouse.create');
    }

    private function rules()
    {
        return [
            'name' => 'required',
            'type' => 'required',
            'brand' => 'required',
            'stock' => 'required',
            'year' => 'required',
            'price' => 'required',
            'cost' => 'required',
            'license_number' => 'required',
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  $request->validate($this->rules());
        if ($request->has('image')) {
            $filename = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $filename . '_' . time() . '.' . $request->image->extension();
            $request->image->storeAs('images', $imageName);
            Warehouse::create([
                'image' => asset('storage/images/' . $imageName),
                ...$data,
            ]);
        } else {
            Warehouse::create([
                ...$data,
            ]);
        }
        return redirect()->route('warehouse.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Warehouse::findOrFail($id);
        return view('warehouse.detail', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Warehouse::find($id);
        return view('warehouse.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payload = $request->validate($this->rules());
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->update($request->except('image'));
        return redirect()->route('warehouse.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Warehouse::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
