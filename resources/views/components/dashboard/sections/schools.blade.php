<section id="schools" class="border border-gray-400 rounded-lg shadow-lg p-1 bg-white">
    <header class="font-bold">Schools</header>
    <div class="flex flex-col border border-0 border-t-2">
        <div class="flex flex-row border border-0 border-b-2 mb-2">
            <label for="" class="w-1/2 sm:w-1/3 md:w-1/4 ">Schools</label>
            <div >
                {{ \App\Models\Tenure::where('user_id', auth()->id())->count() }}
            </div>
        </div>
        <div>
            <style>
                td,th{border: 1px solid darkgrey; padding: 0 0.25rem; text-align: center;}
            </style>
            <table class="border-collapse">
                <thead>
                <tr>
                    <th>School</th>
                    <th>Grades</th>
                    <th>Tenure</th>
                </tr>
                </thead>
                <tbody>
                @forelse(\App\Models\Tenure::where('user_id', auth()->id())->get()->sortBy('school.name') AS $tenure)
                    <tr>
                        <td class="text-left">{{ $tenure->school->name }}</td>
                        <td>{{ $tenure->gradesTaughtString }}</td>
                        <td>{{ $tenure->tenure }}</td>
                    </tr>
                @empty
                    <tr><td colspan="3">No schools found</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
