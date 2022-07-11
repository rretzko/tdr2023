<div id="menu-user" class="hidden sm:block absolute top-0 left-0 w-full py-0 text-lg ">
    <div class="flex flex-row justify-end mr-4 space-x-4">
        <a href="{{ route('profile') }}">
            Profile
        </a>

        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           >
            Log Out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
