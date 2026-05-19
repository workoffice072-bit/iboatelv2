<?php

namespace App\Filament\Resources\Tickets\Pages;

use App\Filament\Resources\Tickets\TicketResource;
use Filament\Actions\EditAction;
use App\Models\TicketMessage;
use Filament\Resources\Pages\ViewRecord;
use Livewire\WithFileUploads;

class ViewTicket extends ViewRecord
{
    use WithFileUploads;

    protected static string $resource = TicketResource::class;

    protected string $view = 'filament.resources.ticket-resource.pages.view-ticket';

    public $message;
    public $attachment;

    public function sendReply()
    {
        $this->validate([
            'message' => 'nullable|string',
            'attachment' => 'nullable|image|max:2048',
        ]);

        if (!$this->message && !$this->attachment) return;

        $path = $this->attachment
            ? $this->attachment->store('tickets', 'public')
            : null;

        TicketMessage::create([
            'ticket_id' => $this->record->id,
            'user_id' => auth()->id(),
            'message' => $this->message,
            'attachment' => $path,
            'is_admin' => true,
        ]);

        $this->record->update(['status' => 'open']);

        $this->reset(['message', 'attachment']);
        $this->record->refresh();
    }
}
