<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Estás Logueado!") }}
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-forms.lugar :ccaas=$ccaas :provincias=$provincias :municipios=$municipios></x-forms.lugar>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('empresas.index') }}" class="p-4 rounded-md text-md bold bg-red-500 hover:bg-zinc-900 text-zinc-900 hover:text-red-500">Empresas</a>
                    <a href="{{ route('sectores.index') }}" class="p-4 ml-4 rounded-md text-md bold bg-red-500 hover:bg-zinc-900 text-zinc-900 hover:text-red-500">Sectores</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
