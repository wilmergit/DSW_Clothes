<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
        $clothes = new Clothe;
        $clothes->title = $request->input('title');
        $clothes->brand = $request->input('brand');
        $clothes->description = $request->input('description');
        $clothes->price = $request->input('price');
        $clothes->save();

        return redirect()->route('clothes.index');
    }

    public function destroy(Clothe $clothes): RedirectResponse
    {
        $clothes->delete();
        return redirect()->route('clothes.index')->with('status', 'Clothes deleted');
    }

    public function edit(Clothe $clothes)
    {
        return view('clothes.edit', compact('clothes'));
    }

    public function update(Request $request, Clothe $clothes)
    {

        $clothes->title = $request->input('title');
        $clothes->brand = $request->input('brand');
        $clothes->description = $request->input('description');
        $clothes->price = $request->input('price');
        $clothes->save();

        session()->flash('status', 'Post updated!');

        return to_route('clothes.index', $clothes);
    }
}
