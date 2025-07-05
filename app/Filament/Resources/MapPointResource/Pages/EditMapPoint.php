<?php

namespace App\Filament\Resources\MapPointResource\Pages;

use App\Filament\Resources\MapPointResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMapPoint extends EditRecord
{
    protected static string $resource = MapPointResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
