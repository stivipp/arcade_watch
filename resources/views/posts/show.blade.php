@extends('layouts.master')

@section('content')

    <div class="max-w-6xl mx-auto my-4 sm:px-6 lg:px-8">
        <div class="pt-8 sm:justify-start sm:pt-0">
            <section class="p-2 bg-gray-800 rounded-2xl" >
                <article class="mt-4 mb-1 mx-2 p-2 bg-gray-700 text-lg rounded-2xl">
                    @include('posts.article', [ 'type' => 'full' ]  )
                </article>

                <article>
                    @include('comments.index')
                </article>
            </section>
        </div>
    </div>

@endsection