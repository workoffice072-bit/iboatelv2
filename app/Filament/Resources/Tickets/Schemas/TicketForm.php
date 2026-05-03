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
                Forms\Components\TextInput::make('subject')->required(),

                Forms\Components\Textarea::make('description'),

                Forms\Components\Select::make('priority')
                    ->options([
                        'low' => 'Low',
                        'medium' => 'Medium',
                        'high' => 'High',
                    ])
                    ->default('medium'),

                Forms\Components\Hidden::make('user_id')
                    ->default(Auth::user()->id),
            ]);
    }
}
