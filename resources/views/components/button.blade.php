@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(["class" => $getStyles()]) }}>
        {{ $slot }}
    </a>
@else
    <button
        type="{{ $type }}"
        {{ $attributes->merge(["class" => $getStyles()]) }}
    >
        {{ $slot }}
    </button>
@endif
