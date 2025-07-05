<?php

namespace App\Filament\Resources\HomestayResource\Pages;

use App\Filament\Resources\HomestayResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomestays extends ListRecords
{
    protected static string $resource = HomestayResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
