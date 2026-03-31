<header class="bg-white shadow">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            {{-- Logo / Title --}}
            <div class="flex items-center">
                <span class="text-xl font-bold text-gray-800">Car2Men</span>
            </div>

           
            <nav class="flex items-center space-x-6">

                <a href="{{ route('home') }}"
                   class="text-gray-600 hover:text-blue-600 font-medium transition {{ request()->routeIs('home') ? 'text-blue-600 underline' : '' }}">
                    Home
                </a>

                <a href="{{ route('test') }}"
                   class="text-gray-600 hover:text-blue-600 font-medium transition {{ request()->routeIs('test') ? 'text-blue-600 underline' : '' }}">
                    Test
                </a>

               

                {{-- Auth Links --}}
                @auth
                 <a href="{{ route('dashboard') }}"
                   class="text-gray-600 hover:text-blue-600 font-medium transition {{ request()->routeIs('dashboard') ? 'text-blue-600 underline' : '' }}">
                    Dashboard
                </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="ml-4 bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">
                            Logout
                        </button>
                    </form>

                    
                @else
                    <a href="{{ route('login') }}"
                       class="ml-4 bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">
                        Login
                    </a>
                @endauth

            </nav>

        </div>
    </div>
</header>