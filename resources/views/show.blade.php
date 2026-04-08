@extends('layouts.main')

@section('title', $car->title)

@section('content')
    <section class="max-w-screen-2xl mx-auto px-6 lg:px-10 py-10">
        <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 p-6 lg:p-8">
                <div>
                    <img
                        src="{{ asset('storage/' . $car->image) }}"
                        alt="{{ $car->title }}"
                        class="w-full h-[420px] object-cover rounded-2xl"
                    >
                </div>

                <div class="flex flex-col justify-center">
                    <p class="text-sm font-medium text-blue-600 mb-2">Beschikbare auto</p>
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">{{ $car->title }}</h1>

                    <div class="mb-6">
                        <p class="text-sm text-gray-500 mb-1">Prijs</p>
                        <p class="text-3xl font-bold text-gray-900">€{{ number_format($car->price, 2, ',', '.') }}</p>
                    </div>

                    
                    <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
    Koop nu
</a>

<br>
                    

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                            <p class="text-sm text-blue-500 mb-1">Model</p>
                            <p class="text-lg font-semibold text-blue-900">{{ $car->model }}</p>
                        </div>

                        <div class="bg-green-50 border border-green-200 rounded-xl p-4">
                            <p class="text-sm text-green-500 mb-1">Bouwjaar</p>
                            <p class="text-lg font-semibold text-green-900">{{ $car->build_year }}</p>
                        </div>

                        <div class="bg-purple-50 border border-purple-200 rounded-xl p-4">
                            <p class="text-sm text-purple-500 mb-1">Merk</p>
                            <p class="text-lg font-semibold text-purple-900">{{ $car->brand }}</p>
                        </div>

                        <div class="bg-orange-50 border border-orange-200 rounded-xl p-4">
                            <p class="text-sm text-orange-500 mb-1">Status</p>
                            <p class="text-lg font-semibold text-orange-900">{{ $car->status }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mt-8">
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v11a2 2 0 002 2z"/>
                    </svg>
                </div>
                <p class="text-sm text-gray-500 mb-1">Bouwjaar</p>
                <p class="text-xl font-bold text-gray-900">{{ $car->build_year }}</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V4H2v16h5m10 0v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6m10 0H7"/>
                    </svg>
                </div>
                <p class="text-sm text-gray-500 mb-1">Previous owner</p>
                <p class="text-xl font-bold text-gray-900">{{ $car->previous_owners }}</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <p class="text-sm text-gray-500 mb-1">Horsepower</p>
                <p class="text-xl font-bold text-gray-900">{{ $car->horsepower }} PK</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 01.553-.894L9 2m0 18l6-3m-6 3V2m6 15l5.447-2.724A1 1 0 0021 13.382V2.618a1 1 0 00-.553-.894L15 0m0 17V0m0 0L9 2"/>
                    </svg>
                </div>
                <p class="text-sm text-gray-500 mb-1">Kilometer</p>
                <p class="text-xl font-bold text-gray-900">{{ number_format($car->kilometer, 0, ',', '.') }} km</p>
            </div>
        </div>
    </section>
@endsection