@props([
    'label' => false,
    'nameid' => $nameid,
    'values' => []
])

<div class="flex flex-col mb-2">
    <label for="{{ $nameid }}"  class="font-bold">
        {{ ucwords($label) }}
    </label>
    <div class="ml-2">
        @foreach($values AS $key => $value)
            <div>
                <input type="radio" name="{{ $nameid }}" value="{{ $key }}" />
                <label for="{{ $nameid }}">{{ ucwords($value) }}</label>
            </div>
        @endforeach
    </div>
</div>
