@extends('layouts.master')

    @section('content')
        
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                
                <h1 class="h-16 p-3 w-auto text-gray-700 sm:h-20">{{ $title }}</h1>

                <ul class="text-gray-700 text-xl">
                    @foreach ($posts as $post)
                        <li class="">{{ $post }}</li>
                    @endforeach
                </ul>

            </div>
        </div>

    @endsection

    @section('sidebar')

        <P>To the side :D</P>
        
    @endsection

            