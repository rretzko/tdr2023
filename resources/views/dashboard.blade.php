@extends('layouts.tdr-app')

@section('content')

    <x-pages.page-breadcrumbs :breadcrumbs="$breadcrumbs" />

    <x-pages.page-header header="Dashboard"/>

    <container class="space-y-2">

        <x-dashboard.sections.schools />

        <x-dashboard.sections.library />

    </container>

@endsection
