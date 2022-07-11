@props([
    'label' => false,
    'nameid' => $nameid,
    'placeholder' => false,
    'required' => false,
    'value' => ''
])

<div class="flex flex-col mb-2">
    <label for="{{ $nameid }}"  class="font-bold">
        {{ ucwords($label) }}
    </label>
    <input type="password"
           class="mb-1 @if($required) bg-green-50 @endif {{ $errors->first($nameid) ?  'bg-red-50' : '' }}"
           name="{{ $nameid }}"
           id="{{ $nameid }}"
           @if($required) required @endif
           placeholder="{{ $placeholder }}"
           value="{{ $value ? $value : (old($nameid) ?? '') }}"
           onkeydown="closeSaved()"
    />
    <div>
        @error($nameid)
        <div class="bg-red-100 text-red-800 border-red-800 rounded-lg font-bold mb-2 px-2">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
