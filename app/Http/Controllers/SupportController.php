<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use App\Models\TicketMessage;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        $tickets = Ticket::where('user_id', auth()->id())->latest()->get();
        return view('support.index', compact('tickets'));
    }

    public function create()
    {
        return view('support.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'required|in:low,medium,high',
            'attachment' => 'nullable|image|max:2048',
        ]);

        $ticket = Ticket::create([
            'user_id' => auth()->id(),
            'subject' => $request->subject,
            'description' => $request->description,
            'priority' => $request->priority,
        ]);

        $path = $request->file('attachment')
            ? $request->file('attachment')->store('tickets', 'public')
            : null;

        TicketMessage::create([
            'ticket_id' => $ticket->id,
            'user_id' => auth()->id(),
            'message' => $request->description,
            'attachment' => $path,
            'is_admin' => false,
        ]);

        return redirect()->route('support.show', $ticket->id);
    }

    public function show(Ticket $ticket)
    {
        abort_if($ticket->user_id !== auth()->id(), 403);

        $ticket->load('messages.user');

        return view('support.show', compact('ticket'));
    }

    public function sendMessage(Request $request, Ticket $ticket)
    {
        abort_if($ticket->user_id !== auth()->id(), 403);

        $request->validate([
            'message' => 'nullable|string',
            'attachment' => 'nullable|image|max:2048',
        ]);

        $path = $request->file('attachment')
            ? $request->file('attachment')->store('tickets', 'public')
            : null;

        TicketMessage::create([
            'ticket_id' => $ticket->id,
            'user_id' => auth()->id(),
            'message' => $request->message,
            'attachment' => $path,
            'is_admin' => false,
        ]);

        $ticket->update(['status' => 'pending']);

        return back();
    }
}