<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <sidebar />

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
