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
        Schools Table
    </div>


@endsection
