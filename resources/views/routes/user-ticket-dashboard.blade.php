@extends("layouts.main")
@extends("layouts.user-sidebar")

@section("headerside")
    <form
        method="GET"
        class="hidden w-full max-w-[40%] md:block"
        action="{{ route("dashboard") }}"
    >
        <x-text-input
            :id="'search'"
            :icon="'bi-search'"
            :value="request('search')"
        />
    </form>
@endsection

@section("main")
    <div class="flex w-full flex-col gap-6 p-6 px-10">
        <x-page-header>
            <x-slot:header>
                <div>
                    <h1
                        class="text-3xl font-black tracking-tight text-zinc-900 uppercase"
                    >
                        My Tickets
                    </h1>
                    <p class="text-lg text-zinc-500">
                        Track and manage your support requests
                    </p>
                </div>
            </x-slot>
            <x-slot:side>
                <x-button
                    :variant="'secondary'"
                    onclick="location.reload()"
                    class="shadow-sm"
                >
                    <i class="bi bi-arrow-clockwise mr-2"></i>
                    Refresh
                </x-button>
                <x-button :href="route('ticket-create')">New Ticket</x-button>
            </x-slot>
        </x-page-header>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
            <x-counter
                :name="'Open'"
                :value="1"
                :color="'border-l-green-600'"
            />
            <x-counter
                :name="'In Progress'"
                :value="1"
                :color="'border-l-amber-500'"
            />
            <x-counter
                :name="'Closed'"
                :value="1"
                :color="'border-l-zinc-400'"
            />
        </div>
        <div
            class="flex items-center justify-between rounded-xl border border-zinc-200 bg-white p-4 shadow-sm"
        >
            <form
                method="GET"
                action="{{ route("dashboard") }}"
                class="flex w-full items-center gap-6"
            >
                <div
                    class="flex flex-1 flex-col items-center gap-4 md:flex-row"
                >
                    <div class="block w-full md:hidden">
                        <x-text-input
                            :id="'search'"
                            :icon="'bi-search'"
                            :value="request('search')"
                            :label="'Search'"
                        />
                    </div>
                    <x-select-input
                        :id="'status'"
                        :label="'Filter Status'"
                        :value="request('status')"
                    >
                        <option value="">All Statuses</option>
                        <option value="open">Open</option>
                        <option value="pending">Pending</option>
                        <option value="closed">Closed</option>
                    </x-select-input>

                    <x-select-input
                        :id="'category'"
                        :label="'Category'"
                        :value="request('category')"
                    >
                        <option value="">All Levels</option>
                        <option value="graduation">Graduation</option>
                        <option value="documents">Documents</option>
                    </x-select-input>
                    <div class="flex flex-col items-center gap-2 md:flex-row">
                        <x-button type="submit" class="min-w-32">
                            Apply Filters
                        </x-button>
                        @if (request()->anyFilled(["status", "category"]))
                            <a
                                href="{{ route("dashboard") }}"
                                class="flex items-center px-4 text-sm font-medium text-zinc-500 transition hover:text-red-800"
                            >
                                Clear
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
        <x-ticket-table
            :columns="['id', 'subject', 'status']"
            :tickets="$tickets"
        />
    </div>
@endsection
