
<section>
    <ol>
        @foreach ($post->comments as $comment)
            <li>
                @include('comments.show')
            </li>
        @endforeach
    </ol>
    
</section>