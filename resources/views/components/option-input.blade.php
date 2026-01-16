@foreach ($options as $value)
    <option value="{{ $value }}" @selected(request($selectName) == $value)>
        {{ $value }}
    </option>
@endforeach
