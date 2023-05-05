@props(['variant' => 'primary', 'size' => 'base'])

@php
switch ($variant) {
    case 'destructive':
        $variantClasses = 'bg-destructive text-destructive-foreground hover:bg-destructive/90';
        break;
    case 'outline':
        $variantClasses = 'border border-input hover:bg-accent hover:text-accent-foreground';
        break;
    case 'secondary':
        $variantClasses = 'bg-secondary text-secondary-foreground hover:bg-secondary/80';
        break;
    case 'ghost':
        $variantClasses = 'hover:bg-accent hover:text-accent-foreground';
        break;
    case 'link':
        $variantClasses = 'underline-offset-4 hover:underline text-primary';
        break;
    case 'primary':
    default:
        $variantClasses = 'bg-primary text-primary-foreground hover:bg-primary/90';
        break;
}

switch ($size) {
    case 'sm':
        $sizeClasses = 'h-9 px-3 rounded-md';
        break;
    case 'lg':
        $sizeClasses = 'h-11 px-8 rounded-md';
        break;
    case 'base':
    default:
        $sizeClasses = 'h-10 py-2 px-4';
        break;
}
@endphp

<button {{ $attributes->class([
    'inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none ring-offset-background',
    $variantClasses,
    $sizeClasses,
])->merge(['type' => 'submit']) }}>
    {{ $slot }}
</button>
