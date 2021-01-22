@extends('layouts.master')

@section('content')

<section class="max-w-sm mx-auto p-2 mt-5 mb-5 text-center bg-gray-800 rounded-xl shadow-md">

    {{-- <header>
        <h1 class="">
            <a class="flex justify-center p-4 mt-2  text-8xl text-gray-600 font-bold hover:text-gray-700" href="/">(@_@)</a>
        </h1>

    </header> --}}
    

    <section>

        <h2 class="pb-4 text-4xl font-bold text-yellow-300" >Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            
                <div class="mb-3 px-2">
                    {{-- <label for="email">Email</label> --}}
                    <input class="w-full h-10 p-2 rounded-md shadow-md
                        focus:outline-none focus:ring focus:ring-yellow-400
                        @error('email') is-invalid @enderror" 
                        id="email" type="email" name="email" placeholder="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
            
    
                <div class="mb-1 px-2">
                    {{-- <label for="password">Heslo</label> --}}
                    <input class="w-full h-10 p-2 rounded-md shadow-md
                        focus:outline-none focus:ring focus:ring-yellow-400
                        @error('password') is-invalid @enderror" 
                        id="password" type="password" placeholder="heslo" name="password" required autocomplete="current-password">
    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
    
           
                    <div class="text-left px-2">

                        <div class="block mt-2">
                            <input class="ml-1"
                            type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                            <label class=" text-yellow-500 font-semibold" for="remember">
                                Zapametaj si ma!
                            </label>
                        </div>
                        
                        <button class="mt-0 mb-2 ml-1 py-2 px-4 bg-yellow-300 text-black font-semibold font-sm border-none rounded-md shadow-md 
                        hover:bg-gray-500 hover:text-yellow-400 hover:shadow-none
                          focus:outline-none focus:ring-1 focus:ring-white"
                            type="submit">
                            Login
                        </button>
                    
                        @if (Route::has('password.request'))
                        <a class="ml-7 text-yellow-500 font-semibold hover:text-white focus:text-gray-300" href="{{ route('password.request') }}">
                            Zabudol si heslo ?
                        </a>
                        @endif

                    </div>

                    @include('errors')
                        
            
        </form>
    </section>
    
</section>

@endsection
