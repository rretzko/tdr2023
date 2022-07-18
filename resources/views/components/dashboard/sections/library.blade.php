<section id="library" class="border border-gray-400 rounded-lg shadow-lg p-1 bg-white">
    <header class="font-bold">Libraries</header>
    <div class="flex flex-row border border-0 border-t-2">
        <div class="mt-2">
            <table>
                <thead>
                <tr>
                    <th>Library</th>
                    <th>Compositions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach(\App\Models\Library\Library::where('user_id', auth()->id())->orderBy('name')->get() AS $library)
                       <tr>
                           <td>{{ $library->name }}</td>
                           <td>{{ $library->compositions()->count() }}</td>
                       </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</section>
