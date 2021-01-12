<article class="{{ $type }}">
    <header>
        <h2 class="py-2 pb-4 text-center text-2xl text-yellow-300 font-bold tracking-wider border-b-2  bg-gradient-to-b from-gray-700 to-gray-800 rounded-2xl">
           <a href="/posts/{{ $post->id }}">
                {{ $post->title }}
            </a> 
        </h2>
        
    </header>

    <p class="mt-2 py-4 px-4 pt-2 text-left text-white">
        {!! nl2br($post->text) !!}
    </p>

    <footer class="">
        <a class="pb-4 px-4 font-bold text-yellow-300" href="/users/{{ $post->user->id }}">
            @<strong>{{ $post->user->name }}</strong>
        </a>
        
        <a class="text-white" href="/posts/{{ $post->id }}#comments">
            {{ $post->comments->count() }} 
            <strong class="text-yellow-300">{{ str_plural('comment', $post->comments->count() )}}</strong>   
        </a>

    </footer>

</article>

