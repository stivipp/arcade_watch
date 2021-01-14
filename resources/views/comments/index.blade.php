
<section>

    @include('comments.create')

    <ol>
        @foreach ($post->comments as $comment)
            <li>
                @include('comments.show')
            </li>
        @endforeach
    </ol>
    
</section>
