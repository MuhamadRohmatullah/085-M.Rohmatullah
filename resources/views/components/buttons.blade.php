@props([
    'image',
    'text'
])

<button {{ $attributes }}>
    <img src="{{ asset($image) }}" alt="" style="width : 20px">
    {{$slot}}
</button>