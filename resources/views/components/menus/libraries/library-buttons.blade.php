@props([
    'libraries' => $libraries,
    'library' => $library,
])
<div id="libraries" class="w-full flex flex-row flex-wrap justify-around mb-2">
    <a href="{{ route('library') }}"  class="space-x-4">
        <button
            class="px-2 @if(is_null($library)) bg-yellow-200 text-black @else bg-gray-400 text-white @endif border border-black rounded-lg"
            title="All compositions entered by all users of TheDirectorsRoom.com"
        >
            TDR
        </button>
    </a>
    @foreach($libraries AS $libraryitem)
        <a href="{{ route('library.show', ['library' => $libraryitem]) }}" class="space-x-4">
            <button
                class="px-2 @if($library && ($library->id == $libraryitem->id)) bg-yellow-200 text-black @else bg-gray-400 text-white @endif border border-black rounded-lg"
                title="Compositions entered for {{ $libraryitem->name }}"
                >
                    {{ $libraryitem->name }}
            </button>
        </a>
    @endforeach
</div>
