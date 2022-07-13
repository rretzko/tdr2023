@extends('layouts.tdr-app')

@section('content')

    <x-pages.page-breadcrumbs :breadcrumbs="$breadcrumbs" />

    <x-pages.page-header header="Schools"/>

    <div id="instructions" class="mb-4 bg-white mx-6 p-4 border border-gray-800" >
        <p class="mb-2">
            Your school information is used to organize almost everything stored in TheDirectorsRoom.com, so it is
        important that this information is as correct as possible.
        </p>
        <p>
            Please note that you are automatically assigned a 'Studio' school.  You can use this option for keeping
            track of private or at-home music libraries or even a small private studio.
        </p>
    </div>

    <div class="mb-4">
        <div class="flex flex-row justify-between pr-4">

            <header class="font-bold">{{ $tenures->count() }} @if($tenures->count() > 1) schools @else school @endif found.</header>

            <a href="" class="text-blue-600">
                Export
            </a>

        </div>

        <style>
            td,th{border: 1px solid black; padding:0.1rem 0.25rem;}
        </style>
        <table class="bg-white w-full">
            <thead>
            <tr>
                <th class="w-7/12">
                    Name
                </th>
                <th>
                    Start
                </th>
                <th>
                    End
                </th>
                <th>
                    Tenure
                </th>
                <th>
                    Grades
                </th>
                <th>
                    <a href="" class="text-center">
                        <button class="px-1 mt-1 bg-green-200 text-green-800 text-sm border border-green-800 shadow-lg rounded-lg">Add</button>
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse($tenures AS $tenure)
                <tr>
                    <td
                        class="sm:hidden"
                        title="{{ $tenure['school']->name }}"
                    >
                        {{ $tenure['school']->abbr }}
                    </td>
                    <td
                        class="hidden sm:block "
                        title="{{ $tenure['school']->name }}"
                    >
                        {{ $tenure['school']->shortName }}
                    </td>
                    <td class="w-1/12 text-center">{{ $tenure->start }}</td>
                    <td class="w-1/12 text-center">{{ $tenure->end }}</td>
                    <td class="w-1/12 text-center">{{ $tenure->tenure }}</td>
                    <td class="w-1/12 text-center">{{ $tenure->gradesTaughtString }}</td>
                    <td class="w-1/12 text-center">
                        <a href="{{ route('schools.edit', ['tenure' => $tenure]) }}">
                            <button class="px-1 mt-1 bg-indigo-200 text-indigo-800 text-sm border border-indigo-800 shadow-lg rounded-lg">
                                Edit
                            </button>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">No schools found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>


@endsection
