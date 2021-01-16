@extends('layouts.master')

@section('content')

    <section class="max-w-sm mx-auto p-2 mt-5 mb-5 bg-gray-800 rounded-xl shadow-md">
        <h2 class="pb-4 text-4xl font-bold  text-center text-yellow-300" >Registrácia</h2>

        <form method="POST" action="{{ route('register') }}">
        @csrf

        
        <label for="name" class="">Meno</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        
    

    
        <label for="email" class="">Email</label>

        <div class="">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    

    
        <label for="password" class="">Heslo</label>

        <div class="">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    

        <div class="">
            <label for="password-confirm" class="">Heslo znova</label>

            <div class="">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        
        <div class="">
            <button type="submit" class="">
                Registrovat
            </button>
        </div>   
        
</form>

                
                    
   
@endsection
