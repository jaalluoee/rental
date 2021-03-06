<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function GuzzleHttp\Promise\all;
use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    private function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = User::paginate(15);
        return view('user.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            User::create([
                'image' => asset('storage/images/' . $imageName),
                ...$data,
            ]);
        } else {
            User::create([
                ...$data,
                'password' => Hash::make($data['password'])
            ]);
        }
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = user::findOrFail($id);
        return view('user.detail', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('user.edit', compact('data'));
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
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'address'=>'required',
        ]);
        $user = User::findOrFail($id);
        $data = $request->all();
        if ($request->has('image')) {
            $filename = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $filename . '_' . time() . '.' . $request->image->extension();
            $request->image->storeAs('images', $imageName);
            $user->update([
                ...$data,
                'image' => asset('storage/images/' . $imageName),
            ]);
        } elseif ($request->has('password')) {
            $user->update([
                ...$data,
                'password' => Hash::make($data['password'])
            ]);
        } elseif ($request->has('image') && $request->has('password')) {
            $filename = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $filename . '_' . time() . '.' . $request->image->extension();
            $request->image->storeAs('images', $imageName);
            $user->update([
                ...$data,
                'password' => Hash::make($data['password']),
                'image' => asset('storage/images/' . $imageName),
            ]);
        } else {

            $user->update([
                ...$data,
            ]);
        }
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
