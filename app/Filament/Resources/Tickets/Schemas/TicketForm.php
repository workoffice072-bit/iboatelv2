<?php

namespace App\Filament\Resources\Tickets\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;
use Illuminate\Support\Facades\Auth;

class TicketForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                       Forms\Components\TextInput::make('subject')
            ->required()
            ->maxLength(255),

        Forms\Components\Textarea::make('description')
            ->rows(3),

        Forms\Components\Select::make('priority')
            ->options([
                'low' => 'Low',
                'medium' => 'Medium',
                'high' => 'High',
            ])
            ->default('medium')
            ->required(),

        Forms\Components\Select::make('status')
            ->options([
                'open' => 'Open',
                'pending' => 'Pending',
                'closed' => 'Closed',
            ])
            ->default('open')
            ->required(),
            ]);
    }
}
