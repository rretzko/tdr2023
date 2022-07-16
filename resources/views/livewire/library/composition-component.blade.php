<div class="bg-white border border-black rounded-lg p-2">
    <form wire:submit.prevent="register" >
        {{-- LIBRARY BUTTONS --}}

        <div>
            <label class="font-bold">Libraries</label>
            <div class="flex flex-row flex-wrap">
                @forelse($libraries AS $libraryitem)

                    <button wire:click="$set('libraryid', {{$libraryitem->id}})"
                            class="@if($libraryitem->id == $libraryid) bg-yellow-200 @else bg-gray-200 @endif border border-black rounded-lg px-2 mr-2 mb-2">
                        {{ $libraryitem->name }}
                    </button>

                @empty
                    No Libraries found.
                @endforelse
            </div>
        </div>

        {{-- COMPOSITION TITLE --}}
        <div>
            <label class="font-bold" for="title" class="">Composition Title</label>
            <input wire:model.debounce.500ms="title" class="@error('title') bg-red-50 @else bg-green-50 @enderror w-full" type="text" required />
            @error('title') <span class="text-red-600">{{ $message }}</span> @enderror

            @if(strlen($searchtitles))
                <div class="flex flex-col text-sm ml-2 border border-blue-600 px-2 rounded-lg mt-2">
                    {!! $searchtitles !!}
                </div>
            @endif
        </div>

        {{-- COMPOSITION SUBTITLE --}}
        <div>
            <label class="font-bold" for="subtitle" class="">Composition SubTitle</label>
            <input model:wire="subtitle" class="bg-green-50 w-full" type="text" />
        </div>

        {{-- COPY TYPES --}}
        <div class="flex flex-col">
            <label class="font-bold" for="copy_type_id" class="">Copy Type</label>
            <div class="flex flex-row ml-4">
                @foreach($copytypes AS $copytypeitem)
                    <div class="flex flex-row mr-2">
                        <button wire:click="$set('copytypeid', {{$copytypeitem->id}})"
                                class="@if($copytypeitem->id == $copytypeid) bg-yellow-200 @else bg-gray-200 @endif border border-black rounded-lg px-2 mr-1  mb-2">
                            {{ strtoupper($copytypeitem->descr) }}
                        </button>
                        <span class=""
                              style="font-size: 0.66rem;"
                              title="{{ $copytypeitem->help }}"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 30 30" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ARRANGEMENT TYPES --}}
        <div class="flex flex-col">
            <label class="font-bold" for="arrangement_type_id" class="">Arrangement Type</label>
            <div class="flex flex-row flex-wrap">
                @forelse($arrangementtypes AS $arrangementtype)
                    <button wire:click="$set('arrangementtypeid', {{$arrangementtype->id}})"
                            class="@if($arrangementtype->id == $arrangementtypeid) bg-yellow-200 @else bg-gray-200 @endif border border-black rounded-lg px-2 mr-2 mb-2">
                        {{ strtoupper($arrangementtype->descr) }}
                    </button>
                @empty
                    No Arrangement types found.
                @endforelse

                    <button wire:click="$set('newarrangementtypetoggle', {{ !$newarrangementtypetoggle }})"
                            class="@if($newarrangementtypetoggle) bg-red-50 text-black @else bg-sky-100 text-sky-800 @endif border border-black rounded-lg px-2 mr-2 mb-2">
                        @if($newarrangementtypetoggle) Hide @else New @endif
                    </button>
            </div>
            <div>
                <input model:wire="newarrangementtype"
                       class="@if($newarrangementtypetoggle) block @else hidden @endif w-full"
                       type="text"
                       placeholder="Add new arrangement type"
                />
            </div>
        </div>

        <x-forms.buttons.add/>

    </form>
</div>
