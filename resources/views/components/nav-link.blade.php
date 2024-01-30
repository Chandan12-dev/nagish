@props(['active'])

@php
$classes = ($active ?? false)
            ? 'menu-item active pl-6 pr-6 pt-6 pb-6'
            : 'menu-item pl-6 pr-6 pt-6 pb-6';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
