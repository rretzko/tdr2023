<form method="post" action="{{ route('profile.update') }}"
      class="bg-white border border-gray-600 p-2 rounded-lg"
>

    @csrf

    <x-forms.input label="Name" nameid="name"  value="{{ auth()->user()->name }}" required />
    <x-forms.input label="Email" nameid="email"  value="{{ auth()->user()->email }}" required />


    <div class="flex flex-row space-x-4">
        <x-forms.buttons.update/>

        @if(session('updated'))
            <x-forms.notifications.updated />
        @endif

    </div>

</form>
