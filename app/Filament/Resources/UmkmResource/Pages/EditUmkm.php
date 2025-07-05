<?php

namespace App\Filament\Resources\UmkmResource\Pages;

use App\Filament\Resources\UmkmResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUmkm extends EditRecord
{
    protected static string $resource = UmkmResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
