
<section class="max-w-screen-2xl mx-auto">
    <nav class="flex justify-end p-4 font-bold ">
        
        {{-- LOGIN/REGISTER LINKS --}}
        @guest
            <a class="pr-2 text-gray-500 hover:text-white focus:text-gray-400" href="{{ route('login') }}">login</a>

            @if (Route::has('register'))
                <a class="text-gray-500 hover:text-white focus:text-gray-400" href="{{ route('register') }}">register</a>              
            @endif

        @endguest


        @auth
            {{-- LOGGED IN USER --}}
            <a class="pr-2 text-yellow-200 hover:text-white focus:text-gray-400" href="/users/{{ auth()->user()->id }}">
                @<strong>{{ auth()->user()->name }}</strong>
            </a>
            
            {{-- LOGOUT LINK --}}
            <a class="text-gray-500 hover:text-white focus:text-gray-400" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                logout
            </a>

            <form  id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                
            </form>

        @endauth
    
    </nav>
</section>