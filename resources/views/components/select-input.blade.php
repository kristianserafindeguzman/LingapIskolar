<div class="flex w-full flex-col gap-1.5">
    @if ($label)
        <label
            for="{{ $id }}"
            class="ml-1 text-xs font-bold tracking-wider text-zinc-500 uppercase"
        >
            {{ $label }}
        </label>
    @endif

    <div class="group relative">
        @if ($icon)
            <div
                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-5 text-zinc-400 transition-colors group-focus-within:text-red-800"
            >
                <i class="bi {{ $icon }} text-xl"></i>
            </div>
        @endif

        <select
            {{
                $attributes->merge([
                    "class" => $getStyleOfInput(),
                    "id" => $id,
                    "name" => $id,
                ])
            }}
        >
            {{ $slot }}
        </select>

        <div
            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4 text-zinc-400 group-focus-within:text-red-800"
        >
            <i class="bi bi-chevron-down text-sm"></i>
        </div>
    </div>
</div>
