<?php

namespace App\Livewire\Dashboard;

use App\Models\Carpost;
use Livewire\Component;

class SellCar extends Component
{
    public string $title = '';
    public string $description = '';
    public string $image = '';
    public string $price = '';
    public string $brand = '';
    public string $model = '';
    public string $build_year = '';
    public string $kilometer = '';
    public string $horsepower = '';
    public string $previous_owners = '';

    public function save(): void
    {
        if (auth()->user()?->role !== 'seller') {
            abort(403);
        }

        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric'],
            'brand' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'build_year' => ['required', 'integer'],
            'kilometer' => ['required', 'integer'],
            'horsepower' => ['required', 'integer'],
            'previous_owners' => ['required', 'integer'],
        ]);

        Carpost::create([
            'seller_id' => auth()->id(),
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
            'price' => $this->price,
            'brand' => $this->brand,
            'model' => $this->model,
            'build_year' => $this->build_year,
            'kilometer' => $this->kilometer,
            'horsepower' => $this->horsepower,
            'previous_owners' => $this->previous_owners,
            'status' => 'available',
        ]);

        $this->reset([
            'title',
            'description',
            'image',
            'price',
            'brand',
            'model',
            'build_year',
            'kilometer',
            'horsepower',
            'previous_owners',
        ]);

        session()->flash('success', 'Auto succesvol toegevoegd.');
    }

    public function render()
    {
        return view('livewire.dashboard.sell-car');
    }
}