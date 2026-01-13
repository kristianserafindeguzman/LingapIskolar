<header
    class="box-border flex flex-row items-center justify-between border-b-2 border-red-800 px-8 py-4"
>
    <div class="left text-3xl">
        <a href="{{ route("root") }}">
            <img src="/img/home-logo.jpg" alt="" class="w-64" />
        </a>
    </div>
    <div class="right flex flex-1 gap-4 justify-end">
        @auth
            @section("side")
            @show
        @endauth

        @guest
            <x-button :href="route('login')">Log In</x-button>
            <x-button :href="route('signup')" :variant="'secondary'">
                Sign Up
            </x-button>
        @endguest
    </div>
</header>
