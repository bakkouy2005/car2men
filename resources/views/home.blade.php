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
@endsection