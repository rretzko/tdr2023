<section id="library" class="border border-gray-400 rounded-lg shadow-lg p-1 bg-white">
    <header class="font-bold ">Library</header>
    <div class="flex flex-row">
        <label for="" class="w-1/2 sm:w-1/3 md:w-1/4 ">Compositions</label>
        <div >
            <span class="font-bold">my#</span>/{{ \App\Models\Library\Composition::all()->count() }}
        </div>
    </div>
</section>
