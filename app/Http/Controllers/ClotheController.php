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
        $clothe = new Clothe;
        $clothe->title = $request->input('title');
        $clothe->brand = $request->input('brand');
        $clothe->description = $request->input('description');
        $clothe->price = $request->input('price');
        $clothe->save();

        return redirect()->route('clothes.index');
    }

    public function destroy(Clothe $clothe): RedirectResponse
    {
        $clothe->delete();
        return redirect()->route('clothes.index')->with('status', 'Clothe deleted');
    }

    public function edit(Clothe $clothe)
    {
        return view('clothes.edit', compact('clothe'));
    }

    public function update(Request $request, $clothe)
    {
        $request->validate([
            'title' => ['required'],
            'brand' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
        ]);

        $clothe->title = $request->input('title');
        $clothe->brand = $request->input('brand');
        $clothe->description = $request->input('description');
        $clothe->price = $request->input('price');
        $clothe->save();

        session()->flash('status', 'Post updated!');

        return to_route('clothes.index', $clothe);
    }
}
