<?php

namespace App\Http\Controllers;

use App\Models\AppConfig;
use Illuminate\Http\Request;

class AppConfigController extends Controller
{
    public function index()
    {
        $results = AppConfig::all();
        return view('app.index', compact('results'));
    }

    private function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'required',
            'description' => 'required',
        ];
    }

    public function create()
    {
        return view('app.create');
    }

    public function store(Request $request)
    {
        $data =  $request->validate($this->rules());
        if ($request->has('image')) {
            $filename = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $filename . '_' . time() . '.' . $request->image->extension();
            $request->image->storeAs('images', $imageName);
            AppConfig::create([
                'image' => asset('storage/images/' . $imageName),
                ...$data,
            ]);
        } else {
            AppConfig::create([
                ...$data,
            ]);
        }
        return redirect()->route('app.index');
    }

    public function show($id)
    {
        $result = AppConfig::findOrFail($id);
        return view('app.detail', compact('result'));
    }

    public function edit($id)
    {
        $data = AppConfig::findOrFail($id);
        return view('app.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $app = AppConfig::findOrFail($id);
        $data = $request->all();
        if ($request->has('image')) {
            $filename = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $filename . '_' . time() . '.' . $request->image->extension();
            $request->image->storeAs('images', $imageName);
            $app->update([
                ...$data,
                'image' => asset('storage/images/' . $imageName),
            ]);
        } else {

            $app->update([
                ...$data,
            ]);
        }
        return redirect()->route('app.index');
    }
}
