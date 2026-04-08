<x-layouts::app :title="__('Bewerk auto')">

<div class="max-w-screen-2xl mx-auto px-6 lg:px-10 py-10">
    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="border-b border-gray-200 px-6 py-5">
            <p class="text-sm font-medium text-blue-600 mb-1">Seller dashboard</p>
            <h2 class="text-2xl font-bold text-black">Bewerk auto</h2>
            <p class="text-sm text-gray-600 mt-1">
                Pas hieronder de gegevens van je auto aan.
            </p>
            <div>
                    <button>
                        <a href="{{ route('car-online') }}" class="text-blue-600 hover:text-blue-800">
                           < Terug naar overzicht
                        </a>
                    </button>
                </div>
        </div>

        <div class="p-6 lg:p-8">
            <form 
                action="{{ route('car-online.update', $car->id) }}" 
                method="POST" 
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-5"
            >
                @csrf
                @method('PUT')

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-black mb-2">Titel</label>
                    <input type="text" name="title" value="{{ $car->title }}"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-black mb-2">Beschrijving</label>
                    <textarea name="description" rows="5"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $car->description }}</textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-black mb-2">Nieuwe afbeelding (optioneel)</label>
                    <input type="file" name="image"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black bg-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="text-xs text-gray-500 mt-1">Laat leeg als je de huidige afbeelding wilt behouden.</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-black mb-2">Prijs</label>
                    <input type="number" name="price" value="{{ $car->price }}"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black mb-2">Merk</label>
                    <input type="text" name="brand" value="{{ $car->brand }}"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black mb-2">Model</label>
                    <input type="text" name="model" value="{{ $car->model }}"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black mb-2">Bouwjaar</label>
                    <input type="number" name="build_year" value="{{ $car->build_year }}"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black mb-2">Kilometer</label>
                    <input type="number" name="kilometer" value="{{ $car->kilometer }}"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black mb-2">Horsepower</label>
                    <input type="number" name="horsepower" value="{{ $car->horsepower }}"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black mb-2">Vorige eigenaren</label>
                    <input type="number" name="previous_owners" value="{{ $car->previous_owners }}"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-black mb-2">Status</label>
                    <select name="status"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="available" {{ $car->status === 'available' ? 'selected' : '' }}>Available</option>
                        <option value="sold" {{ $car->status === 'sold' ? 'selected' : '' }}>Sold</option>
                    </select>
                </div>



                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                        Wijzigingen opslaan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</x-layouts::app>