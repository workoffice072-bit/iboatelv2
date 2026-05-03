<x-filament::page>
    <div class="space-y-4">

        <!-- Messages -->
        <div class="bg-white p-4 rounded shadow h-96 overflow-y-auto">
            @foreach($record->messages as $msg)
                <div class="mb-3 {{ $msg->is_admin ? 'text-right' : 'text-left' }}">
                    <div class="inline-block px-3 py-2 rounded
                        {{ $msg->is_admin ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                        <p>{{ $msg->message }}</p>
                        <small>{{ $msg->user->name }}</small>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Reply Box -->
        <div class="flex gap-2">
            <input type="text" wire:model="message"
                   class="w-full border rounded px-3 py-2"
                   placeholder="Type message...">

            <button wire:click="sendReply"
                    class="bg-primary-600 text-white px-4 py-2 rounded">
                Send
            </button>
        </div>

    </div>
</x-filament::page>
