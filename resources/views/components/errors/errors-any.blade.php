@if ($errors->any())
    <div class="bg-red-100 text-red-800 border-red-800 rounded-lg font-bold mb-2 px-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
