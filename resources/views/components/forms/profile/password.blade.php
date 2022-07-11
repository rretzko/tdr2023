<form method="post" action="{{ route('profile.password') }}"
      class="bg-white border border-gray-600 p-2 rounded-lg"
>

    @csrf

    <x-forms.password label="Current Password" nameid="current"  value="" required />
    <x-forms.password label="New Password" nameid="password"  value="" required />
    <x-forms.password label="Confirm Password" nameid="password_confirmation"  value="" required />

    <div class="flex flex-row space-x-4">
        <x-forms.buttons.update/>

        @if(session('password'))
            <x-forms.notifications.password />
        @endif

    </div>

</form>
