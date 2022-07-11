@extends('layouts.tdr-app')

@section('content')

    <x-pages.page-breadcrumbs :breadcrumbs="$breadcrumbs" />

    <x-pages.page-header header="Dashboard"/>

    <container class="">

        <x-dashboard.sections.library />

    </container>

@endsection
