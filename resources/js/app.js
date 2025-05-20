import './bootstrap';

document.addEventListener('livewire:load', () => {
    const chatEl = document.getElementById('chat-container');
    if (!chatEl) return console.warn('[Chat] element not found');

    const wireId = chatEl.getAttribute('wire:id');
    console.log('[Chat] wire:id:', wireId);

    if (!wireId) return console.error('[Chat] wire:id attribute not found');

    const comp = Livewire.find(wireId);
    if (!comp) return console.error('[Chat] Livewire component not found');

    comp.on('newMessage', payload => {
        console.log('New message:', payload);
    });
});
