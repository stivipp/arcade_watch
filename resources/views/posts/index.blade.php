@extends('layouts.master')

    @section('content')
        
        <div class="max-w-4xl mx-auto my-4 sm:px-6 lg:px-8">
            <div class="pt-8 sm:justify-start sm:pt-0">

                <ol class="p-2 bg-gray-800 rounded-2xl">
                    @foreach ($posts as $post)
                        <li class="mt-4 mb-8 mx-2 p-2 bg-gray-700 rounded-2xl  shadow-lg">
                            @include('posts.article', [ 'type' => 'listing' ] )
                        </li>
                    @endforeach
                </ol>

            </div>
        </div>

    @endsection

    @section('sidebar')

        <P>To the side :D</P>
        
    @endsection

            