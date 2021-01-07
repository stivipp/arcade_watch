@extends('layouts.master')

    @section('content')
        
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="pt-8 sm:justify-start sm:pt-0">
                
                <h1 class="h-16 p-3 w-auto sm:h-20 text-center text-5xl text-gray-600 bold">{{ $title }}</h1>

                <ul class="">
                    @foreach ($posts as $post)
                        <li class="text-center">
                            <h2 class="text-yellow-200 text-xl">{{ $post->title }}</h2>    
                            <p class="text-sm text-white">{{ $post->text }}</p>    

                            <small class="text-yellow-600">
                                {{ $post->user->name }}
                            </small>

                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

    @endsection

    @section('sidebar')

        <P>To the side :D</P>
        
    @endsection

            