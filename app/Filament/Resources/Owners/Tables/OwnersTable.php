<?php

namespace App\Filament\Resources\Owners\Tables;

use App\Models\User;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Actions\Action;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Placeholder;

class OwnersTable
{
    public static function configure(Table $table): Table
    {
        return $table
        ->query(
            User::query()
                ->where('user_type', 'client')
                ->withoutGlobalScopes([
                    SoftDeletingScope::class,
                ])
        )
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),

                Tables\Columns\TextColumn::make('email')->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

                Tables\Columns\IconColumn::make('is_verified')
                    ->boolean()
                    ->label('Verified'),

                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true)
            ])
            ->filters([

                // ✅ Active / Inactive filter
                Tables\Filters\SelectFilter::make('is_active')
                    ->label('Status')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ]),

                // ✅ Verified / Unverified filter
                Tables\Filters\SelectFilter::make('is_verified')
                    ->label('Verification')
                    ->options([
                        1 => 'Verified',
                        0 => 'Unverified',
                    ]),

                // ✅ Optional: show deleted users
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make('viewUser')
                ->label('View')
                ->icon('heroicon-o-eye')
                ->modalHeading(fn ($record) => 'User Details - ' . $record->name)
                ->modalWidth('lg')

                ->form([

                    Placeholder::make('name')
                        ->label('Name')
                        ->content(fn ($record) => $record->name),

                    Placeholder::make('email')
                        ->label('Email')
                        ->content(fn ($record) => $record->email),

                    Placeholder::make('status')
                        ->label('Status')
                        ->content(fn ($record) => $record->is_active ? 'Active' : 'Inactive'),

                    Placeholder::make('verified')
                        ->label('Verified')
                        ->content(fn ($record) => $record->is_verified ? 'Yes' : 'No'),

                    Placeholder::make('created_at')
                        ->label('Created At')
                        ->content(fn ($record) => $record->created_at),

                ])

                ->modalSubmitAction(false),
               Action::make('toggleStatus')
    ->label(fn ($record) => $record->is_active ? 'Deactivate' : 'Activate')
    ->icon(fn ($record) => $record->is_active ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle')
    ->color(fn ($record) => $record->is_active ? 'danger' : 'success')

    ->requiresConfirmation()

    ->modalHeading(fn ($record) =>
        $record->is_active ? 'Deactivate Owner?' : 'Activate Owner?'
    )

    ->modalDescription(fn ($record) =>
        $record->is_active
            ? 'Are you sure you want to deactivate this owner?'
            : 'Are you sure you want to activate this owner?'
    )

    ->action(function ($record) {
        $record->update([
            'is_active' => ! $record->is_active,
        ]);
    }),Action::make('toggleVerify')
    ->label(fn ($record) => $record->is_verified ? 'Unverify' : 'Verify')
    ->icon(fn ($record) => $record->is_verified ? 'heroicon-o-x-circle' : 'heroicon-o-check-badge')
    ->color(fn ($record) => $record->is_verified ? 'danger' : 'success')

    ->requiresConfirmation()

    ->modalHeading(fn ($record) =>
        $record->is_verified ? 'Unverify Owner?' : 'Verify Owner?'
    )

    ->modalDescription(fn ($record) =>
        $record->is_verified
            ? 'This will remove verification from this owner. Do you want to continue?'
            : 'This will mark this owner as verified. Do you want to continue?'
    )

    ->action(function ($record) {
        $record->update([
            'is_verified' => ! $record->is_verified, // 👈 same column
        ]);

        \Filament\Notifications\Notification::make()
            ->title($record->is_verified ? 'Owner Verified' : 'Owner Unverified')
            ->success()
            ->send();
    })

            ])
            ->toolbarActions([
                BulkActionGroup::make([]),
                DeleteBulkAction::make(),
            ]);
    }
}
