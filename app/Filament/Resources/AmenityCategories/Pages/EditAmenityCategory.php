<?php

namespace App\Filament\Resources\AmenityCategories\Pages;

use App\Filament\Resources\AmenityCategories\AmenityCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAmenityCategory extends EditRecord
{
    protected static string $resource = AmenityCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
