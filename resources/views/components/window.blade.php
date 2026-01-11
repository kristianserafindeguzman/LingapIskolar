<div class="flex w-full items-center justify-center">
    <div
        class="flex min-w-80 flex-col gap-4 rounded-xl border-2 border-black bg-white p-8"
    >
        <h1 class="text-4xl font-bold">{{ $title }}</h1>
        <p class="">{{ $message }}</p>
        <div class="flex flex-row justify-end gap-2">
            {{ $slot }}
            
        </div>
    </div>
</div>
