@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-sm font-medium text-foreground'
            : 'text-sm font-medium hover:text-foreground/80 text-foreground/60 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
