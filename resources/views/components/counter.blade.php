<div
    {{
        $attributes->merge([
            "class" => "flex flex-1 flex-col gap-1 rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm transition-all hover:shadow-md",
        ])
    }}
>
    <div class="flex items-center justify-between">
        <p class="text-xs font-black tracking-widest text-zinc-500 uppercase">
            {{ $name }}
        </p>
        <div
            class="h-2 w-2 rounded-full bg-red-800 shadow-[0_0_8px_rgba(153,27,27,0.4)]"
        ></div>
    </div>

    <div class="flex items-baseline gap-2">
        <p class="text-4xl leading-none font-black text-zinc-900">
            {{ $value }}
        </p>
        <p class="text-xs font-bold text-zinc-400">Total</p>
    </div>
</div>
