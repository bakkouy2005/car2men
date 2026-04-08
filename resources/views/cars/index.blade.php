@extends('layouts.main')

@section('title', 'Alle auto’s')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Alle auto’s</h1>

    @foreach($carposts as $car)
        <div class="mb-4 border p-4 rounded">
            <h2 class="font-bold">{{ $car->title }}</h2>
            <p>Prijs: €{{ $car->price }}</p>
            <p>Merk: {{ $car->brand }}</p>
            <p>Aantal eigenaar : {{ $car->previous_owners }}</p>
            <img src="{{ $car->image }}" alt="{{ $car->title }}" class="w-full">
        </div>
    @endforeach
@endsection