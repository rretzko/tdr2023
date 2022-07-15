<div class="bg-white border border-black rounded-lg p-2">
    <form wire:submit.prevent="register" >
        {{-- LIBRARY BUTTONS --}}
        <div>
            <label class="font-bold">Libraries</label>
            <div class="flex flex-row flex-wrap">
                @forelse($libraries AS $library)
                    <button wire:click="$set('libraryid', {{$library->id}})" class="bg-gray-200 border border-black rounded-lg px-2 mr-2 mb-2">
                        {{ $library->name }}
                    </button>
                @empty
                    No Libraries found.
                @endforelse
            </div>
        </div>

        {{-- COMPOSITION TITLE --}}
        <div>
            <label class="font-bold" for="title" class="">Composition Title</label>
            <input model:wire="title" class="bg-green-50 w-full" type="text" required />
        </div>

        {{-- COMPOSITION SUBTITLE --}}
        <div>
            <label class="font-bold" for="subtitle" class="">Composition SubTitle</label>
            <input model:wire="subtitle" class="bg-green-50 w-full" type="text" required />
        </div>

        {{-- COPY TYPES --}}
        <div class="flex flex-col">
            <label class="font-bold" for="copy_type_id" class="">Copy Type</label>
            <div class="flex flex-col ml-4">
                @foreach($copytypes AS $copytype)
                    <div class="flex flex-row space-x-2">
                        <label class="flex flex-row">
                            <input wire:model="copytypeid" type="radio" class="mr-1" value="{{ $copytype->id }}" />
                            {{ ucwords($copytype->descr) }}
                            <span class="ml-1"
                                  style="font-size: 0.66rem;"
                                  title="{{ $copytype->help }}"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 30 30" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                </svg>
                                </span>
                        </label>
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
                            class="@if($arrangementtype->id == $arrangementtypeid) bg-yellow-300 @else bg-gray-200 @endif border border-black rounded-lg px-2 mr-2 mb-2">
                        {{ strtoupper($arrangementtype->descr) }}
                    </button>
                @empty
                    No Arrangement types found.
                @endforelse

                    <button wire:click="$set('newarrangementtypetoggle', {{ !$newarrangementtypetoggle }})" class="@if($newarrangementtypetoggle) bg-red-50 @else bg-green-200 @endif text-green-800 border border-black rounded-lg px-2 mr-2 mb-2">
                        @if($newarrangementtypetoggle) Hide @else Add @endif
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

    </form>
</div>
