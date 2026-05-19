@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-6">

    <div class="flex justify-between mb-4">
        <h2 class="text-xl font-bold">My Tickets</h2>
        <a href="{{ route('support.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
            Create Ticket
        </a>
    </div>

    <div class="bg-white shadow rounded-lg">
        @foreach ($tickets as $ticket)
            <a href="{{ route('support.show', $ticket->id) }}"
               class="block border-b p-4 hover:bg-gray-50">

                <div class="flex justify-between">
                    <div>
                        <h3 class="font-semibold">{{ $ticket->subject }}</h3>
                        <p class="text-sm text-gray-500">{{ $ticket->description }}</p>
                    </div>

                    <div class="text-right">
                        <span class="text-xs px-2 py-1 bg-yellow-100 rounded">
                            {{ ucfirst($ticket->priority) }}
                        </span>

                        <span class="text-xs px-2 py-1 bg-blue-100 rounded">
                            {{ ucfirst($ticket->status) }}
                        </span>
                    </div>
                </div>

            </a>
        @endforeach
    </div>

</div>
@endsection