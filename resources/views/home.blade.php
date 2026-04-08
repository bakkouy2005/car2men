@extends('layouts.main')     

@section('title', 'Test pagina')

@section('content')
    <section class="relative bg-cover bg-center min-h-[65vh] flex items-start"
        style="background-image: url('{{ asset('images/hero.webp') }}')">

        {{-- Overlay (dark gradient for better contrast) --}}
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"></div>

        <div class="relative w-full max-w-screen-2xl mx-auto px-6 lg:px-10 pt-24">

            <div class="max-w-lg text-left text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">
                    Car2Men
                </h1>

                <p class="text-gray-200 mb-6">
                    Vind jouw perfecte auto snel en eenvoudig. Betrouwbaar, snel en overzichtelijk.
                </p>

                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}"
                       class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                        Naar dashboard
                    </a>

                    <a href="{{ route('test') }}"
                       class="bg-white text-gray-900 px-6 py-2 rounded-lg hover:bg-gray-200 transition">
                        Bekijk meer
                    </a>
                </div>
            </div>

        </div>

    </section>

    <section class="max-w-screen-2xl mx-auto px-6 lg:px-10 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach($carposts as $car)
                <div class="relative w-full h-80 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="{{ asset('storage/' . $car->image) }}" class="w-full h-full object-cover hover:scale-110 transition duration-500">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                    <div class="absolute bottom-0 p-5 text-white w-full">
                        <h5 class="text-xl font-bold mb-1">{{ $car->title }}</h5>

                        <p class="text-sm font-semibold text-blue-300 mb-2">
                            {{ $car->brand }}
                        </p>

                        <div class="flex justify-between items-center mb-3">
                            <span class="text-lg font-bold">
                                €{{ number_format($car->price, 2, ',', '.') }}
                            </span>
                        </div>

                        <div class="flex justify-between text-sm mb-4">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7h6v10M5 17h14"/>
                                </svg>
                                <span>{{ number_format($car->kilometer, 0, ',', '.') }} km</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                <span>{{ $car->horsepower }} PK</span>
                            </div>
                        </div>

                        <a href="{{ route('cars.show', $car->id) }}"
                           class="block w-full text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                            Bekijk auto
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection