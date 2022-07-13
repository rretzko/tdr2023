@extends('layouts.tdr-app')

@section('content')

    <x-pages.page-breadcrumbs :breadcrumbs="$breadcrumbs" />

    <x-pages.page-header header="Add A New School" />

    {{-- SCHOOL FORM --}}
    <div class="mb-4">

        @livewire('school-component', ['school' => $tenure['school']] )

    </div>

@endsection
