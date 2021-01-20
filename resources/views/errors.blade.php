
@if ($errors->any())
    <div class="flex p-2 text-red-500 font-bold bg-white rounded-xl">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif