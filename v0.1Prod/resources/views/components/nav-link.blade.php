@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2 ml-1 pt-1 border-b-2 border-red-500 shadow-md shadow-red-500 text-lg font-bold leading-5 text-gray-100 focus:outline-none focus:border-red-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-2 ml-1 pt-1 border-b-2 border-transparent text-lg font-medium leading-5 text-gray-400 hover:text-blue-900 hover:border-red-500 focus:outline-none focus:text-gray-300 focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
