@props([
    'arrangementtypes' => $arrangementtypes,
    'openlibraries' => $openlibraries,
])
<form method="post" action="{{ route('library.composition.store') }}" class="bg-white border border-gray-600 p-2 rounded-lg">

    @csrf

    <x-forms.tags label="libraries" nameid="library_id"  tagid="library_id" :tags="$openlibraries" required />
    <x-forms.input label="composition title" nameid="title" required/>
    <x-forms.input label="composition subTitle" nameid="subtitle" />
    <x-forms.radio label="copy type" nameid="copy_type_id" :values="['single copy','director copy','choral library']" />
    <x-forms.tags label="select or add one arrangement type" nameid='arrangement_type_id' :tags="$arrangementtypes" tagid="arrangement_type_id" required can_add />

    <div class="flex flex-row space-x-4">
        <x-forms.buttons.add/>

        @if(session('saved'))
            <x-forms.notifications.saved />
        @endif

    </div>

</form>
