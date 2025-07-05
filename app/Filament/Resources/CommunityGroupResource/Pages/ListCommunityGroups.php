<?php

namespace App\Filament\Resources\CommunityGroupResource\Pages;

use App\Filament\Resources\CommunityGroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommunityGroups extends ListRecords
{
    protected static string $resource = CommunityGroupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
