@section("sidebar")
    <x-sidebar-navigation
        :icon="'bi-clipboard-data-fill'"
        :title="'Dashboard'"
        :url="'/dashboard'"
    />
    <x-sidebar-navigation
        :icon="'bi-plus-circle-fill'"
        :title="'Create Ticket'"
        :url="'/ticket/create'"
    />
    <x-sidebar-navigation
        :icon="'bi-gear-fill'"
        :title="'Settings'"
        :url="'/settings'"
    />
@endsection
