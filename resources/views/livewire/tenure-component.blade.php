<form wire:submit.prevent="register()"
      class="bg-white p-4 border border-black rounded-lg"
>

    {{-- SCHOOL NAME --}}
    <div class="flex flex-col mb-2">
        <label for="name">Tenure at: {{ $name }}</label>
    </div>

    {{-- PROPERTIES TABLE --}}
    <style>
        table{border-collapse: collapse;}
        td,th{border: 1px solid black; text-align: center;}
    </style>
    <table class="w-full sm:w-6/12 text-sm">
        <thead>
        <tr>
            <th>Start</th>
            <th>End</th>
            <th>Tenure</th>
        </tr>
        </thead>
        <tbody>
        <tr class="border border-black">
            <td class="">
                <input wire:model="start" class="w-24 bg-green-50 text-sm" type="number" value="{{ $start }}" required />
            </td>
            <td class="">
                <input wire:model="end" class="w-24 text-sm" type="number" value="{{ $end }}" />
            </td>
            <td class="border-none text-sm">
                <label for="">{{ $tenureyears }}</label>
            </td>
        </tr>
        </tbody>
    </table>

    <div class="flex flex-row mb-1">

    </div>
    <div>
        @error('start')
        <div class="bg-red-100 text-red-800 border-red-800 rounded-lg font-bold mb-2 px-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        @error('end')
        <div class="bg-red-100 text-red-800 border-red-800 rounded-lg font-bold mb-2 px-2">
            {{ $message }}
        </div>
        @enderror
    </div>

    {{-- SUBMIT --}}
    <div class="flex flex-row">
        <label for=""></label>
        <input class="w-36 border border-indigo-800 text-white bg-indigo-200 rounded-lg" type="submit" value="Update" />
        @if(strlen($updatedmssg))
            <div id="updatedMssg"
                 class="ml-2 mb-2 mt-1 px-2 bg-indigo-100 text-indigo-800 border-indigo-800 rounded-lg font-bold"
            >
                {{ $updatedmssg }}
            </div>
        @endif
    </div>
</form>

