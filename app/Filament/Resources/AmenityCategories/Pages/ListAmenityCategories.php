<?php

namespace App\Filament\Resources\AmenityCategories\Pages;

use App\Filament\Resources\AmenityCategories\AmenityCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAmenityCategories extends ListRecords
{
    protected static string $resource = AmenityCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
