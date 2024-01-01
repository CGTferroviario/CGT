@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 bg-zinc-600 border-red-500 placeholder-zinc-400 text-white shadow-sm']) !!}>
