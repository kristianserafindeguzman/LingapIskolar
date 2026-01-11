@extends("layouts.main")

@section("main")
    <x-window
        :title="'Are you sure you want to log out?'"
        :message="'You will need to log in again to access your account.'"
    >
        <x-button :variant="'secondary'" onclick="history.back()">
            Go Back
        </x-button>
        <form method="POST" action="/logout">
            @csrf
            <x-button :type="'submit'">Log Out</x-button>
        </form>
    </x-window>
@endsection
