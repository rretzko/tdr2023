@extends('layouts.tdr-app')

@section('content')

    <x-pages.page-breadcrumbs :breadcrumbs="$breadcrumbs" />

    <x-pages.page-header header="Add a new Composition"/>

    <container class="{{ route('library.medley') }}">

        <div class="mb-3">
            <a href="" class="text-sm text-blue-600 bg-white border border-blue-800 rounded-lg shadow-lg px-2">
                Click here if the new composition is a medley
            </a>
        </div>

        @livewire('library.composition-component')

        <x-forms.composition.store :arrangementtypes="$arrangementtypes" :openlibraries="$openlibraries"/>

    </container>

<!-- {{--
        <div>
            <header>Artists</header>

            <form method="" action="" style="margin-bottom: 0.5rem;">
                <div>

                    <div style="display: flex; flex-direction: row;">
                        <div style="margin-right: 0.5rem;">
                            <input type="text" name="name" id="name" value="" placeholder="Felix Mendelssohn"/>
                            <div id="search_name">Search Name</div>
                        </div>
                        <div style="margin-right: 0.5rem;">
                            <input type="text" name="type" id="type" value="" placeholder="composer, arranger, etc."/>
                            <div id="search_type">Search Type</div>
                        </div>
                        <div>
                            <button
                                style="border: 1px solid darkgreen; border-radius: 0.5rem;color: black; background-color: rgba(0,255,0,0.3); padding: 0.25rem;">
                                &plus;
                            </button>
                        </div>
                    </div>

                </div>

                <div>
                    <label for=""></label>
                    <input type="submit" name="submit" id="submit" value="Add"/>
                </div>

            </form>
        </div>

        <div>

            <header>Style & Tags</header>

            <form method="post" action="{{ route('library.composition.store') }}" style="margin-bottom: 0.5rem;">

                <div>
                    <label for=""></label>
                    <input type="submit" name="submit" id="submit" value="Add"/>
                </div>

                @csrf

            </form>
        </div>
        --}} -->
@endsection

