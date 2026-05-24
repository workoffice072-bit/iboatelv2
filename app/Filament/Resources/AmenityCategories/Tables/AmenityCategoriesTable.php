<?php

namespace App\Filament\Resources\AmenityCategories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Tables\Table;
use Filament\Tables;

class AmenityCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
        ->defaultSort('id', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('sr_no')
                ->label('Sr. No.')
                ->rowIndex(),

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
