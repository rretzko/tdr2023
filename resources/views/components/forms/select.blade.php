@props([
    'label' => false,
    'nameid' => $nameid,
    'options' => [],

])
<div class="flex flex-col mb-2">
    <label for="{{ str_replace(' ','',$nameid) }}" class="font-bold">
        {{ ucwords($label) }}
    </label>
    <select name="{{ $nameid }}" class="mb-1 @if($errors->first('arrangement_type_id')) bg-red-50 @endif }}">
        @forelse($options AS $option)
            <option value="{{ $option->id }}">{{ ucwords($option->descr) }}</option>
        @empty
            <option value="0">No option available</option>
        @endforelse
    </select>
    <div>
        @error($nameid)
         <div class="bg-red-100 text-red-800 border-red-800 rounded-lg font-bold mb-2 px-2">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
