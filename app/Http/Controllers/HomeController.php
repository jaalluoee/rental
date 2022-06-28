<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data=Warehouse::paginate(15);
        return view('welcome', compact('data'));
    }
}
