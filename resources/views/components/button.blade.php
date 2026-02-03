@props(['href', 'type' => 'view'])

<!-- Reusable button component - displays as a link with different colors based on type -->
@php
    // Base styling applied to all buttons
    $baseClasses = "inline-flex items-center px-3 py-1.5 rounded-md transition text-sm font-semibold shadow-sm";
    
    // Change colors based on button type (edit = yellow, delete = red, view = blue)
    if ($type === 'edit') {
        $colorClasses = "bg-yellow-50 text-yellow-600 hover:bg-yellow-100 border border-yellow-200 dark:bg-yellow-900/30 dark:text-yellow-300 dark:border-yellow-700";
    } elseif ($type === 'delete') {
        $colorClasses = "bg-red-50 text-red-600 hover:bg-red-100 border border-red-200 dark:bg-red-900/30 dark:text-red-300 dark:border-red-700";
    } else {
        // Default View (Pink/Blue Theme)
        $colorClasses = "bg-blue-50 text-blue-600 hover:bg-blue-100 border border-blue-200 dark:bg-blue-900/30 dark:text-blue-300 dark:border-blue-700";
    }
@endphp

<!-- Button link - combines base and color classes with the href prop -->
<a href="{{ $href }}" {{ $attributes->merge(['class' => "$baseClasses $colorClasses"]) }}>
    {{ $slot }}
</a>