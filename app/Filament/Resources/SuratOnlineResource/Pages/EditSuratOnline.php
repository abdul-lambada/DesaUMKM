<?php

namespace App\Filament\Resources\SuratOnlineResource\Pages;

use App\Filament\Resources\SuratOnlineResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratOnline extends EditRecord
{
    protected static string $resource = SuratOnlineResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
