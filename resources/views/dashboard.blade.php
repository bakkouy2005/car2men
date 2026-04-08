<x-layouts::app :title="__('Dashboard')">
   

    

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v11a2 2 0 002 2z"/>
                    </svg>
                </div>
                <p class="text-sm text-gray-500 mb-1">Credit</p>
                <p class="text-xl font-bold text-gray-900">€{{ number_format($credit, 2, ',', '.') }} </p>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <p class="text-sm text-gray-500 mb-1">Auto's:</p>
                <p class="text-xl font-bold text-gray-900">{{ $myCars }}</p>
            </div>


            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <p class="text-sm text-gray-500 mb-1">Verkocht:</p>
                <p class="text-xl font-bold text-gray-900">{{ $mySales }}</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 01.553-.894L9 2m0 18l6-3m-6 3V2m6 15l5.447-2.724A1 1 0 0021 13.382V2.618a1 1 0 00-.553-.894L15 0m0 17V0m0 0L9 2"/>
                    </svg>
                </div>
                <p class="text-sm text-gray-500 mb-1">Omzet:</p>
                <p class="text-xl font-bold text-gray-900">€{{ number_format($revenue, 2, ',', '.') }}</p>
            </div>

            
        </div>

        
    </div>
</x-layouts::app>