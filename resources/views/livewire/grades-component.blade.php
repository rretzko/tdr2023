<form wire:submit.prevent="register()"
      class="bg-white p-4 border border-black rounded-lg"
>

    {{-- SCHOOL NAME --}}
    <div class="flex flex-col mb-2">
        <label for="name">Grades I teach at: <b>{{ $name }}</b></label>
    </div>

    {{-- PROPERTIES TABLE --}}
    <div class="flex flex-row flex-wrap space-x-4">
        @foreach($grades AS $grade)
            <div class="flex flex-row space-x-1 mb-2">
                <input type="checkbox" name="grades[{{$grade}}]" value="{{ $grade }}" />
                <label for="grades[{{ $grade }}]" class="-mt-1">{{ $grade }}</label>
            </div>
        @endforeach

    </div>
</form>

