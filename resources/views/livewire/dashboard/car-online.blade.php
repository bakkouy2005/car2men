

<div class="max-w-screen-2xl mx-auto px-6 lg:px-10 py-10">
    <h1 class="text-2xl font-bold text-white mb-6">Mijn auto's</h1>

    <div class="grid md:grid-cols-3 gap-6">
        @forelse($carposts as $car)
            <div class="bg-white rounded-2xl shadow overflow-hidden">

                <!-- Image -->
                <img 
                    src="{{ asset('storage/' . $car->image) }}" 
                    alt="{{ $car->title }}"
                    class="w-full h-48 object-cover"
                >

                <!-- Content -->
                <div class="p-4">
                    <h2 class="text-lg font-bold text-black">
                        {{ $car->title }}
                    </h2>

                    <p class="text-sm text-gray-600">
                        {{ $car->brand }} - {{ $car->model }}
                    </p>

                    <p class="text-blue-600 font-bold mt-2">
                        €{{ number_format($car->price, 2, ',', '.') }}
                    </p>

                    <!-- Actions -->
                    <div class="flex gap-2 mt-4">
                        <a href="{{ route('cars.show', $car->id) }}"
                           class="flex-1 text-center bg-gray-200 text-black py-2 rounded-lg">
                            Bekijken
                        </a>

                        <a href="{{ route('car-online.edit', $car->id) }}"
                           class="flex-1 text-center bg-blue-600 text-white py-2 rounded-lg">
                            Bewerken
                        </a>

                        <form action="{{ route('car-online.destroy', $car->id) }}" method="POST" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-full bg-red-600 text-white py-2 rounded-lg">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        @empty
            <div class="bg-white p-6 rounded-xl text-black col-span-3">
                Je hebt nog geen auto's geplaatst.
            </div>
        @endforelse
    </div>
</div>