<?php

namespace App\Filament\Resources\Tickets\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables;


class TicketsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                 Tables\Columns\TextColumn::make('subject')->searchable()->limit(30),

            Tables\Columns\TextColumn::make('user.name')
                ->label('User')
                ->sortable(),

            Tables\Columns\BadgeColumn::make('priority')
                ->colors([
                    'success' => 'low',
                    'warning' => 'medium',
                    'danger' => 'high',
                ]),

            Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'success' => 'open',
                    'warning' => 'pending',
                    'danger' => 'closed',
                ]),

            Tables\Columns\TextColumn::make('created_at')->since(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
              ViewAction::make(),

               
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
