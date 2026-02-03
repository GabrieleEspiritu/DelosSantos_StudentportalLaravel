@props(['href' => '#', 'type' => 'view'])

@php
    $base = 'inline-flex items-center px-4 py-2 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2';
    $classes = $type === 'edit'
        ? $base.' bg-yellow-500 hover:bg-yellow-600 text-white shadow'
        : $base.' bg-blue-500 hover:bg-blue-600 text-white shadow';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
