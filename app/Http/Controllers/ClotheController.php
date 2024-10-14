<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clothe;

class ClotheController extends Controller
{
    public function index()
    {
        $clothes = Clothe::all();
        return view('clothes.index', compact('clothes'));
    }

    public function create()
    {
        return view('clothes.create');
    }

    public function store(Request $request)
    {
        $clothe = new Clothe;
        $clothe->title = $request->input('title');
        $clothe->brand = $request->input('brand');
        $clothe->description = $request->input('description');
        $clothe->price = $request->input('price');
        $clothe->save();

        return redirect()->route('clothes.index');
    }
}
