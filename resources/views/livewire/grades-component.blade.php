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
                <input wire:model="checkeds" type="checkbox"  value="{{ $grade->id }}" />
                <label for="checkeds[{{ $grade->id }}]" class="-mt-1">{{ $grade->descr }}</label>
            </div>
        @endforeach

        {{-- SUCCESS MESSAGE --}}
        <div>
            @if(strlen($updatedmssg))
               <div class="bg-green-50 text-green-800 px-2 border border-green-800 rounded-lg">
                  {{ $updatedmssg }}
               </div>
            @endif
        </div>

    </div>
</form>

