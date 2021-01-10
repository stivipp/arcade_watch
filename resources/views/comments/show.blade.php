<article class="max-w-md mx-auto my-4 sm:px-6 lg:px-8 text-white">
    <div>
        {{ $comment->text }}
    </div>

    <footer class="pt-2 text-sm">
        <a class="text-yellow-300 " href="/users/{{ $comment->user->id }}">
            @<strong>{{ $comment->user->name }}</strong>
        </a>
        <time datetime="{{ $comment->created_at->toW3cString() }}" class="px-2 text-gray-600">
            {{ $comment->created_at->diffForHumans() }}
        </time>
    </footer>

</article>