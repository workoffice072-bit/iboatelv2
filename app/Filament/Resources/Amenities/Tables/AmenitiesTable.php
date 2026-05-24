<?php

namespace App\Filament\Resources\Amenities\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Tables\Table;
use Filament\Tables;

class AmenitiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('sr_no')
                ->label('Sr. No.')
                ->rowIndex(),
            Tables\Columns\TextColumn::make('category.name')
                ->label('Category')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('name')
                ->searchable(),

            Tables\Columns\TextColumn::make('created_at')
                ->date()
                ->sortable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
                ForceDeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
