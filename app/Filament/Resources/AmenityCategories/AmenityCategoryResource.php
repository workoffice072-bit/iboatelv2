<?php

namespace App\Filament\Resources\AmenityCategories;

use App\Filament\Resources\AmenityCategories\Pages\CreateAmenityCategory;
use App\Filament\Resources\AmenityCategories\Pages\EditAmenityCategory;
use App\Filament\Resources\AmenityCategories\Pages\ListAmenityCategories;
use App\Filament\Resources\AmenityCategories\Schemas\AmenityCategoryForm;
use App\Filament\Resources\AmenityCategories\Tables\AmenityCategoriesTable;
use App\Models\AmenityCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AmenityCategoryResource extends Resource
{
    protected static ?string $model = AmenityCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'AmenityCategory';
    protected static string|\UnitEnum|null $navigationGroup = 'Boat Management';
    protected static ?int $navigationSort = 6;
    public static function form(Schema $schema): Schema
    {
        return AmenityCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AmenityCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAmenityCategories::route('/'),
            'create' => CreateAmenityCategory::route('/create'),
            'edit' => EditAmenityCategory::route('/{record}/edit'),
        ];
    }
}
