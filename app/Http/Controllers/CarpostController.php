<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carpost;

class CarpostController extends Controller
{
    public function index()
    {
        $carposts = Carpost::all();

        return view('home', compact('carposts'));
    }

    public function show(Carpost $car)
    {
    return view('show', compact('car'));
    }

    public function store(Request $request)
{
    $path = null;

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('cars', 'public');
    }

    Carpost::create([
        'seller_id' => auth()->id(),
        'title' => $request->title,
        'description' => $request->description,
        'image' => $path,
        'price' => $request->price,
        'brand' => $request->brand,
        'model' => $request->model,
        'build_year' => $request->build_year,
        'kilometer' => $request->kilometer,
        'horsepower' => $request->horsepower,
        'previous_owners' => $request->previous_owners,
        'status' => 'available',
    ]);

    return redirect()->back()->with('success', 'Auto toegevoegd!');
}
}
