<article class="{{ $type }}">
    <header>
        <h2 class="p-4 text-center text-yellow-300 font-bold tracking-wider">
           <a href="/posts/{{ $post->id }}">
                {{ $post->title }}
            </a> 
        </h2>
        
    </header>

    <p class="pb-4 px-4 text-left text-white">
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

