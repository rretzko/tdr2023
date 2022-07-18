<style>
    .showHide{
        background-color: rgba(255,255,255,0.8);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 0.5rem 0.25rem;
    }
    @media screen AND (min-width: 640px){
        #menu-hamburger{display: none;}
    }
</style>
<nav id="menu-hamburger" class="flex flex-row md:hidden absolute top-1 left-1 z-10">
    <div class="z-10 h-10">
        <div id="logo">
            <img
                width="40px"
                src="{{ asset('images/tdr_logo_20200716.png') }}"
                alt="TheDirectorsRoom.com svg image"
            />
        </div>
    </div>

    <div class="flex flex-col lg:hidden" onclick="showRows()">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
            />
        </svg>
        <div id="hamburger-rows" class="hidden flex flex-col  lg:flex">
            <a href="{{ route('dashboard') }}" class="text-blue-600 bold">Dashboard</a>
            <a href="#" class="text-blue-600 bold">Students</a>
            <a href="#" class="text-blue-600 bold">Ensembles</a>
            <a href="{{ route('library.index') }}" class="text-blue-600 bold">Libraries</a>
            <a href="#" class="text-blue-600 bold">Membership</a>
            <a href="#" class="text-blue-600 bold">Events</a>
            <a href="#" class="text-blue-600 bold">Profile</a>
            <a href="#" class="text-blue-600 bold">Log Out</a>
        </div>
    </div>
</nav>

<script>
    function showRows(){
        document.getElementById('hamburger-rows').classList.toggle('showHide');
        //document.getElementById('hamburger-rows').classList.add('hidden');
    }
</script>
