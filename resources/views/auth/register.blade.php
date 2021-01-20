@extends('layouts.master')

@section('content')

    <section class="max-w-sm mx-auto p-4 mt-5 mb-5 bg-gray-800 rounded-xl shadow-md">
        <h2 class="pb-4 text-4xl font-bold  text-center text-yellow-300" >Registrácia</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

    

        <div class="mb-3 text-yellow-500 text-left">
            <input class="w-full h-10 p-2 rounded-md shadow-md
                focus:outline-none focus:ring focus:ring-yellow-400" 
                placeholder="meno" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    

        <div class="mb-3">
            <input class="w-full h-10 p-2 rounded-md shadow-md
                focus:outline-none focus:ring focus:ring-yellow-400"
                placeholder="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <input class="w-full h-10 p-2 rounded-md shadow-md
                focus:outline-none focus:ring focus:ring-yellow-400"     
                placeholder="heslo" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    

            <div class="mb-1">
                <input class="w-full h-10 p-2 rounded-md shadow-md
                    focus:outline-none focus:ring focus:ring-yellow-400" 
                    placeholder="heslo znova" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
    
        <div class="">
            <button class="my-2  py-2 px-4 bg-yellow-300 text-black font-semibold font-sm border-none rounded-md shadow-md 
                    hover:bg-gray-500 hover:text-yellow-400 hover:shadow-none
                    focus:outline-none focus:ring-1 focus:ring-white"
                    type="submit">
                Registrovat
            </button>
        </div>   
        
        @include('errors')
        
        </form>

                
                    
   
@endsection
