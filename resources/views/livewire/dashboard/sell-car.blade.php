<div class="max-w-screen-2xl mx-auto px-6 lg:px-10 py-10">
    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
        
        <!-- Header -->
        <div class="border-b border-gray-200 px-6 py-5">
            <p class="text-sm font-medium text-blue-600 mb-1">Seller dashboard</p>
            <h2 class="text-2xl font-bold text-black">Verkoop een auto</h2>
            <p class="text-sm text-gray-600 mt-1">
                Vul hieronder de gegevens van je auto in.
            </p>
        </div>

        <!-- Form -->
        <div class="p-6 lg:p-8">
            <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-5">
                @csrf

                <!-- Titel -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-black mb-2">Titel</label>
                    <input type="text" name="title" placeholder="Audi RS6 Performance"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Beschrijving -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-black mb-2">Beschrijving</label>
                    <textarea name="description" rows="5" placeholder="Beschrijving van de auto..."
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <!-- Image Upload -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-black mb-2">Afbeelding</label>
                    <input type="file" name="image"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black bg-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="text-xs text-gray-500 mt-1">Upload een afbeelding van de auto</p>
                </div>

                <!-- Prijs -->
                <div>
                    <label class="block text-sm font-medium text-black mb-2">Prijs</label>
                    <input type="number" name="price" step="0.01"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Merk -->
                <div>
                    <label class="block text-sm font-medium text-black mb-2">Merk</label>
                    <input type="text" name="brand" placeholder="Audi"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Model -->
                <div>
                    <label class="block text-sm font-medium text-black mb-2">Model</label>
                    <input type="text" name="model" placeholder="RS6"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Bouwjaar -->
                <div>
                    <label class="block text-sm font-medium text-black mb-2">Bouwjaar</label>
                    <input type="number" name="build_year"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Kilometer -->
                <div>
                    <label class="block text-sm font-medium text-black mb-2">Kilometerstand</label>
                    <input type="number" name="kilometer"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- PK -->
                <div>
                    <label class="block text-sm font-medium text-black mb-2">Horsepower</label>
                    <input type="number" name="horsepower"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Previous owners -->
                <div>
                    <label class="block text-sm font-medium text-black mb-2">Vorige eigenaren</label>
                    <input type="number" name="previous_owners"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Submit -->
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                        Auto toevoegen
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>