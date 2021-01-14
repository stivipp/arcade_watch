
<section>

    @auth
        @include('comments.create')
    @endauth

    <ol>
        @foreach ($post->comments as $comment)
            <li>
                @include('comments.show')
            </li>
        @endforeach
    </ol>
    
</section>
