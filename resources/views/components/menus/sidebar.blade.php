<div id="menu-sidebar" class="flex flex-col hidden sm:flex h-screen mb-6 bg-gray-700 rounded-lg py-2 pl-2 pr-4">
    <div id="logo" class="mb-6">
        <img
            width="60px"
            src="{{ asset('images/tdr_logo_20200716.png') }}"
            alt="TheDirectorsRoom.com svg image"
        />
    </div>

    <div class="pl-3 text-lg">

        {{-- DASHBOARD --}}
        <a href="{{ route('dashboard') }}"
           class="px-1 @if(explode('.',Route::currentRouteName())[0] === 'dashboard') text-yellow-200 font-bold @else text-white @endif hover:bg-gray-500"
        >
            Dashboard
        </a>

        {{-- SCHOOLS --}}
        <a href="{{ route('schools') }}"
           class="px-1 @if(explode('.',Route::currentRouteName())[0] === 'schools') text-yellow-200 font-bold @else text-white @endif hover:bg-gray-500"
        >
            Schools
        </a>

        {{-- STUDENTS --}}
        <div class="px-1 text-gray-400 hover:bg-gray-500">Students</div>

        {{-- ENSEMBLES --}}
        <div class="px-1 text-gray-400 hover:bg-gray-500">Ensembles</div>

        {{-- LIBRARIES --}}
        <a href="{{ route('library.index') }}"
           class="px-1 @if(explode('.',Route::currentRouteName())[0] === 'library') text-yellow-200 font-bold @else text-white @endif hover:bg-gray-500"
        >
            Libraries
        </a>

        {{-- MEMBERSHIPS --}}
        <div class="px-1 text-gray-400 hover:bg-gray-500">Membership</div>

        {{-- EVENTS --}}
        <div class="px-1 text-gray-400 hover:bg-gray-500">Events</div>

    </div>

</div>
