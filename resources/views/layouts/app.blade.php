<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
@livewireScripts
@vite(['resources/js/app.js'])
{{-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script> --}}
{{-- <script>
    window.Echo.channel('chat-room')
        .listen('NewChatMessage', (e) => {
            Livewire.dispatch('messageReceived', { message: e.message });
        });
</script>
 --}}
<script>
    document.addEventListener('chat-opened', (event) => {
            const conversation = event.detail.conversation;
            const tag = 'wirechat-notification-' + conversation;

            // Check if navigator.serviceWorker exists
            if (navigator.serviceWorker && navigator.serviceWorker.controller) {
                navigator.serviceWorker.controller.postMessage({
                    type: 'CLOSE_NOTIFICATION',
                    tag: tag
                });
            }
        });
  </script>
  
  
    </body>
</html>
