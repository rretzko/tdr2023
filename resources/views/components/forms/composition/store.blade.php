@props([
    'arrangementtypes' => $arrangementtypes,
])
<form method="post" action="{{ route('library.composition.store') }}" class="bg-white border border-gray-600 p-2 rounded-lg">

    @csrf

    <x-forms.input label="composition title" nameid="title" required="true"/>
    <x-forms.input label="composition subTitle" nameid="subtitle" />
    <x-forms.tags label="select or add one arrangement type" nameid='arrangement_type_id' :tags="$arrangementtypes" />

    <div class="flex flex-row space-x-4">
        <x-forms.buttons.add/>

        @if(session('saved'))
            <x-forms.notifications.saved />
        @endif

    </div>

</form>
