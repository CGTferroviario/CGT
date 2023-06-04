<button {{ $attributes->merge(['type' => 'button', 'class' => 'bg-rojoBrillante flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500']) }}>
    {{ $slot }}
</button>
