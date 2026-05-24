<?php

namespace App\Filament\Resources\Amenities\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;

class AmenityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Amenity Details')
                ->description('Create and manage boat amenities.')
                ->icon('heroicon-o-building-office')
                ->columnSpanFull()
                ->columns(2)
                ->schema([

                    Select::make('amenity_category_id')
                        ->label('Amenity Category')
                        ->relationship('category', 'name')
                        ->searchable()
                        ->preload()
                        ->required(),

                    TextInput::make('name')
                        ->label('Amenity Name')
                        ->placeholder('Sun Deck')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(function ($state, callable $set) {
                            $set('slug', Str::slug($state));
                        }),

                        TextInput::make('slug')
                        ->label('Slug')
                        ->placeholder('outside-amenities')
                        ->prefixIcon('heroicon-o-link')
                        ->disabled()
                        ->dehydrated()
                        ->required(),    

                    Toggle::make('status')
                        ->label('Active')
                        ->default(true),
                ]),
            ]);
    }
}
