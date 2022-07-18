<section id="schools" class="border border-gray-400 rounded-lg shadow-lg p-1 bg-white">
    <header class="font-bold">Schools</header>
    <div class="flex flex-col mb-2 border border-0 border-t-2">

        <div class="mt-2">
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
