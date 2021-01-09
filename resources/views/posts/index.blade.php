@extends('layouts.master')

    @section('content')
        
        <div class="max-w-6xl mx-auto my-4 sm:px-6 lg:px-8">
            <div class="pt-8 sm:justify-start sm:pt-0">

                <ol class="p-2 bg-gray-800 rounded-2xl">
                    @foreach ($posts as $post)
                        <li class="my-4 mx-2 p-2 bg-gray-700 rounded-2xl	">
                            @include('posts.article')
                        </li>
                    @endforeach
                </ol>

            </div>
        </div>

    @endsection

    @section('sidebar')

        <P>To the side :D</P>
        
    @endsection

            