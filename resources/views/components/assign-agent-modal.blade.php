<div x-data="{ show: false }">
    <x-button @click="show = true">Easy Assign</x-button>

    <div
        x-show="show"
        class="fixed top-0 left-0 z-50 flex h-dvh w-dvw items-center justify-center bg-black/25"
    >
        <form method="POST" action="/ticket/{{ $ticket["id"] }}/assign">
            @csrf
            @method("PUT")
            <div
                class="flex flex-col gap-4 rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm"
            >
                <div>
                    <x-page-header>
                        <x-slot:header>
                            <div>
                                <h1
                                    class="text-3xl font-black tracking-tight text-zinc-900 uppercase"
                                >
                                    Ticket Assignment
                                </h1>
                                <p class="text-lg text-zinc-500">
                                    Please select an agent to assign this
                                    ticket.
                                </p>
                            </div>
                        </x-slot>
                        <x-slot:side></x-slot>
                    </x-page-header>
                </div>
                <x-select-input
                    :id="'assigned_to'"
                    label="Agent to be assigned"
                >
                    <option value="Reimu">Reimu</option>
                    <option value="Marisa">Marisa</option>
                </x-select-input>
                <x-select-input :id="'priority'" label="Priority">
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                    <option value="Urgent">Urgent</option>
                </x-select-input>
                <div
                    class="mt-4 flex w-full flex-col items-center justify-center gap-4 md:flex-row"
                >
                    <x-button :type="'submit'">Assign</x-button>
                    <x-button :variant="'secondary'" @click="show = false">
                        Close
                    </x-button>
                </div>
            </div>
        </form>
    </div>
</div>
