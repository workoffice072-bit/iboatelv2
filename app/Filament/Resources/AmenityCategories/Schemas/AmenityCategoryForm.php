<?php

namespace App\Filament\Resources\AmenityCategories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Section;

class AmenityCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->components([
            Section::make('Amenity Category')
                ->description('Create and manage boat amenity categories.')
                ->icon('heroicon-o-squares-2x2')
                ->columnSpanFull()
                ->columns(2)
                ->schema([

                    TextInput::make('name')
                        ->label('Category Name')
                        ->placeholder('Outside Amenities')
                        ->prefixIcon('heroicon-o-tag')
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

                 
                ]),
        ]);
    }
}
