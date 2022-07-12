@extends('layouts.tdr-app')

@section('content')

    <x-pages.page-breadcrumbs :breadcrumbs="$breadcrumbs" />

    <x-pages.page-header header="Update {{ $tenure['school']->name }}"/>

    <div class="mb-4">

        @livewire('tenure-component', ['tenure' => $tenure] )

    </div>

    <div class="mb-4">

        @livewire('school-component', ['school' => $tenure['school']] )

    </div>

@endsection
