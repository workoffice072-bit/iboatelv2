@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-6">

    <h2 class="text-xl font-bold mb-2">{{ $ticket->subject }}</h2>
    <p class="text-gray-500 mb-4">{{ $ticket->description }}</p>

    <!-- CHAT -->
    <div class="bg-gray-100 p-4 rounded-lg max-h-[400px] overflow-y-auto space-y-3">

        @foreach ($ticket->messages as $msg)
            <div class="{{ $msg->is_admin ? 'text-left' : 'text-right' }}">

                <div class="inline-block p-3 rounded-lg
                    {{ $msg->is_admin ? 'bg-white' : 'bg-blue-600 text-white' }}">

                    <p>{{ $msg->message }}</p>

                    @if ($msg->attachment)
                        <img src="{{ asset('storage/'.$msg->attachment) }}"
                             class="mt-2 w-40 rounded">
                    @endif

                    <div class="text-xs mt-1">
                        {{ $msg->created_at->diffForHumans() }}
                    </div>

                </div>

            </div>
        @endforeach

    </div>

    <!-- SEND MESSAGE -->
    <form action="{{ route('support.message', $ticket->id) }}"
          method="POST" enctype="multipart/form-data"
          class="mt-4 flex gap-2">

        @csrf

        <input type="text" name="message"
               class="w-full border p-2 rounded"
               placeholder="Type message...">

        <input type="file" name="attachment">

        <button class="bg-blue-600 text-white px-4 rounded">
            Send
        </button>

    </form>

</div>
@endsection