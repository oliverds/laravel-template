@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'flex h-10 w-full rounded-md border border-input bg-transparent px-3 py-2 text-sm focus:ring-offset-background placeholder:text-muted-foreground focus:border-input focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50']) !!}>
