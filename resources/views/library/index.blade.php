@extends('layouts.tdr-app')

@section('content')

    <x-pages.page-breadcrumbs :breadcrumbs="$breadcrumbs" />

    <x-pages.page-header header="Libraries"/>

    <x-menus.libraries.library-buttons :libraries="$libraries" :library="$library"/>

    <div id="search" class="my-2">
        <input type="text"
               class="rounded-lg py-0 w-full text-sm"
               value="" placeholder="Search by title or artist"
        />
    </div>

    <div id="filters" class="my-2">
        <a href="" class="text-blue-600">
            Advanced Filters
        </a>
    </div>

    <container class="">

        <div class="flex flex-row justify-between pr-4">

            <header class="font-bold">{{ $compositions ? $compositions->count() : 0 }} compositions found.</header>

            <a href="" class="text-blue-600">
                Export
            </a>

        </div>

        <style>
            td,th{border: 1px solid black; padding: 0 0.25rem;}
        </style>
        <table class="bg-white w-full">
            <thead>
            <tr>
                <th>###</th>
                <th class="flex flex-row">
                    <div class="w-11/12 text-center my-1">Description</div>
                    @if($library)
                        <a href="{{ route('library.composition', ['library' => $library]) }}" class="ml-8 ">
                            <button class="px-1 mt-1 bg-green-200 text-green-800 text-sm border border-green-800 shadow-lg rounded-lg">
                                Add
                            </button>
                        </a>
                    @endif
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse($compositions AS $composition)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="w-11/12">{!! $composition->summaryHtml !!}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center">No compositions found</td>
                </tr>
            @endforelse
            </tbody>
        </table>

    </container>

@endsection
