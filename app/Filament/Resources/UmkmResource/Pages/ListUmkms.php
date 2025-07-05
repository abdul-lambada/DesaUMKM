<?php

namespace App\Filament\Resources\UmkmResource\Pages;

use App\Filament\Resources\UmkmResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUmkms extends ListRecords
{
    protected static string $resource = UmkmResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
