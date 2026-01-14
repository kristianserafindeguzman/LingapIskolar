<div x-data="{ show: false }">
    <x-button @click="show = true">Easy Assign</x-button>

    <div
        x-show="show"
        class="fixed top-0 left-0 z-50 flex h-dvh w-dvw items-center justify-center bg-black/25"
    >
        <div
            class="flex flex-col gap-4 rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm"
        >
            {{ $content }}
            <div
                class="flex w-full flex-col items-center justify-center gap-4 md:flex-row"
            >
                {{ $buttons }}
                <x-button @click="show = false">Close</x-button>
            </div>
        </div>
    </div>
</div>
