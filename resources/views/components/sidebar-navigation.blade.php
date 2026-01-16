<a
    href="{{ $url }}"
    class="group flex w-full items-center gap-3 rounded-lg px-4 py-3 text-zinc-900 transition-all duration-200 hover:bg-zinc-100"
>
    <div class="flex items-center justify-center">
        <i class="bi {{ $icon }} text-2xl"></i>
    </div>

    <span class="font-semibold tracking-wide">
        {{ $title }}
    </span>

    <i class="bi bi-chevron-right ml-auto text-xs transition-opacity"></i>
</a>
