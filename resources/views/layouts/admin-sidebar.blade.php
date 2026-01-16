@section("sidebar")
    <x-sidebar-navigation
        :icon="'bi-clipboard-data-fill'"
        :title="'Dashboard'"
        :url="'/dashboard'"
    />
    <x-sidebar-navigation
        :icon="'bi-person-fill-add'"
        :title="'Manager List'"
        :url="'/manager'"
    />
    <x-sidebar-navigation
        :icon="'bi-person-fill-up'"
        :title="'Agent List'"
        :url="'/agent'"
    />
    <x-sidebar-navigation
        :icon="'bi-gear-fill'"
        :title="'Settings'"
        :url="'/settings'"
    />
@endsection
