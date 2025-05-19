import './bootstrap';

document.addEventListener('livewire:load', () => {
    const chatEl = document.getElementById('chat-container')
    if (!chatEl) return console.warn('[Chat] element not found')

    // ambil controller via Livewire API, bukan __controller langsung:
    const comp = Livewire.find(chatEl.getAttribute('wire:id'))
    if (!comp) return console.error('[Chat] Livewire component not found')

    comp.on('newMessage', payload => {
        console.log('New message:', payload)
    })
})
