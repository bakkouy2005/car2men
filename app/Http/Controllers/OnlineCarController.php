<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carpost;

class OnlineCarController extends Controller
{
    public function index()
    {
        $carposts = Carpost::where('seller_id', auth()->id())
            ->latest()
            ->get();

        return view('car-online', compact('carposts'));
    }
    
    public function show(Carpost $car)
    {
        $car = Carpost::where('id', $car->id)
            ->where('seller_id', auth()->id())
            ->firstOrFail();

        return view('car-online.show', compact('car'));
    }

    public function edit(Carpost $car)
    {
        $car = Carpost::where('id', $car->id)
            ->where('seller_id', auth()->id())
            ->firstOrFail();

        return view('car-online.edit', compact('car'));
    }

    public function update(Request $request, Carpost $car)
    {
        $car = Carpost::where('id', $car->id)
            ->where('seller_id', auth()->id())
            ->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'build_year' => 'required|integer',
            'kilometer' => 'required|integer',
            'horsepower' => 'required|integer',
            'previous_owners' => 'required|integer',
            'status' => 'required|string|max:255',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'brand' => $request->brand,
            'model' => $request->model,
            'build_year' => $request->build_year,
            'kilometer' => $request->kilometer,
            'horsepower' => $request->horsepower,
            'previous_owners' => $request->previous_owners,
            'status' => $request->status,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('cars', 'public');
        }

        $car->update($data);

        return redirect()->back()->with('success', 'Auto succesvol bijgewerkt.');
    }

    public function destroy(Carpost $car)
    {
        $car = Carpost::where('id', $car->id)
            ->where('seller_id', auth()->id())
            ->firstOrFail();

        $car->delete();

        return redirect()->back()->with('success', 'Auto succesvol verwijderd.');
    }
}
