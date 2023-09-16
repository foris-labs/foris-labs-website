@props(['route'])

@php
$classes = (request()->routeIs($route))
            ?
            "text-orange-500"
            :
            "text-gray-800 hover:text-orange-500";
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => $classes. " px-3 py-2 rounded-md text-base font-medium transition-colors duration-300"]) }}>
    {{ $slot }}
</a>
