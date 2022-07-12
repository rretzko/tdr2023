@extends('layouts.tdr-app')

@section('content')

    <x-pages.page-breadcrumbs :breadcrumbs="$breadcrumbs" />

    <x-pages.page-header header="Update {{ $tenure['school']->name }}"/>

    {{-- TENURE FORM --}}
    <div class="mb-4">

        @livewire('tenure-component', ['tenure' => $tenure] )

    </div>

    {{-- GRADES FORM --}}
    <div class="mb-4">

        @livewire('grades-component', ['school' => $tenure['school']]) {{-- , ['grades' => $grades]  --}}

    </div>

    {{-- SCHOOL FORM --}}
    <div class="mb-4">

        @livewire('school-component', ['school' => $tenure['school']] )

    </div>

@endsection
