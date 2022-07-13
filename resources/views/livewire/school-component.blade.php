<form wire:submit.prevent="register()"
    class="bg-white p-4 border border-black rounded-lg"
>

    {{-- SCHOOL NAME --}}
    <div class="flex flex-col mb-2">
        <label for="name">School Name</label>
        <input wire:model.debounce.500ms="name"
               class="w-60 mb-1 bg-green-50 {{ $errors->first('name') ?  'bg-red-50' : '' }}"
               type="text" value="{{ $name ? $name : (old($name)) }}"
               required
               onkeydown="closeUpdated()"
        />
        <div>
            {!! $searchresults !!}
        </div>
    </div>
    <div>
        @error('name')
        <div class="bg-red-100 text-red-800 border-red-800 rounded-lg font-bold mb-2 px-2">
            {{ $message }}
        </div>
        @enderror
    </div>

    {{-- ADDRESS1 --}}
    <div class="flex flex-col mb-1">
        <label for="address">Address</label>
        <input wire:model="address1" class="w-60" type="text" value="{{ $address1 }}" />
    </div>
    <div>
        @error('address1')
        <div class="bg-red-100 text-red-800 border-red-800 rounded-lg font-bold mb-2 px-2">
            {{ $message }}
        </div>
        @enderror
    </div>

    {{-- ADDRESS2 --}}
    <div class="flex flex-col mb-2">
        <label for="address2"></label>
        <input wire:model="address2" class="w-60" type="text" value="{{ $address2 }}" />
    </div>
    <div>
        @error('address2')
        <div class="bg-red-100 text-red-800 border-red-800 rounded-lg font-bold mb-2 px-2">
            {{ $message }}
        </div>
        @enderror
    </div>

    {{-- CITY --}}
    <div class="flex flex-col mb-2">
        <label for="city">City</label>
        <input wire:model="city"
               class="w-60 mb-1 bg-green-50 {{ $errors->first('city') ?  'bg-red-50' : '' }}"
               type="text"
               value="{{ $city }}"
               required
        />
    </div>
    <div>
        @error('city')
        <div class="bg-red-100 text-red-800 border-red-800 rounded-lg font-bold mb-2 px-2">
            {{ $message }}
        </div>
        @enderror
    </div>

    {{-- COUNTY --}}
    <div class="flex flex-col mb-2">
        <label for="countyid">County</label>
        <select wire:model="countyid" class="w-36 bg-green-50">
            @foreach($counties AS $county)
                <option value="{{ $county->id }}">{{ $county->name }}</option>
            @endforeach
        </select>

    </div>

    {{-- GEOSTATE --}}
    <div class="flex flex-col mb-2">
        <label for="geostateid">State</label>
        <select wire:model="geostateid" class="w-36 bg-green-50">
            @foreach($geostates AS $geostate)
                <option value="{{ $geostate->id }}">{{ $geostate->abbr }}</option>
            @endforeach
        </select>
    </div>

    {{-- POSTAL CODE --}}
    <div class="flex flex-col mb-2">
        <label for="postalcode">Zip Code</label>
        <input wire:model="postalcode"
               class="w-36 mb-1 bg-green-50 {{ $errors->first('postalcode') ?  'bg-red-50' : '' }}"
               type="text"
               value="{{ $city }}"
               required
               onkeydown="closeUpdated()"
        />
    </div>
    <div>
        @error('postalcode')
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
