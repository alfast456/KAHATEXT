<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ...meta dan css... -->
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <livewire:layout.navigation />
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        <main>
            {{ $slot }}
        </main>
    </div>

@livewireScripts

<script src="{{ asset('js/echo.js') }}"></script> {{-- Jika sudah compile dan ada di public/js --}}

@vite(['resources/js/app.js'])
  <script>
document.addEventListener('chat-opened', (event) => {
    const conversation = event.detail.conversation;
    const tag = 'wirechat-notification-' + conversation;

    // Check if service workers are supported
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.ready.then(registration => {
            if (registration.active) {
                registration.active.postMessage({
                    type: 'CLOSE_NOTIFICATION',
                    tag: tag
                });
            } else {
                console.warn('Service Worker is registered but not active');
            }
        }).catch(err => {
            console.error('Service Worker registration error:', err);
        });
    } else {
        console.warn('Service Workers are not supported in this browser');
    }
});
</script></body>
<script>
    document.addEventListener('livewire:load', () => {
        const chatEl = document.getElementById('chat-container');
        console.log('chat-container:', chatEl);
        if (chatEl) {
            const wireId = chatEl.getAttribute('wire:id');
            console.log('wire:id:', wireId);
            const comp = Livewire.find(wireId);
            console.log('Livewire comp:', comp);
        }
    });
</script>
</html>
