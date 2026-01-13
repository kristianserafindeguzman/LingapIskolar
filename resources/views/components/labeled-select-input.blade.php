<div class="flex w-full flex-col gap-1.5">
    <label
        for="{{ $id }}"
        class="ml-1 text-xs font-black tracking-widest text-zinc-500 uppercase"
    >
        {{ $label }}
    </label>

    <x-select-input :id="$id">
        {{ $slot }}
    </x-select-input>
</div>
