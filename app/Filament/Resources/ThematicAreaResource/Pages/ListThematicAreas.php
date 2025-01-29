<?php

namespace App\Filament\Resources\ThematicAreaResource\Pages;

use App\Filament\Resources\ThematicAreaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListThematicAreas extends ListRecords
{
    protected static string $resource = ThematicAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
