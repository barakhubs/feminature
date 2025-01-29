<?php

namespace App\Filament\Resources\ThematicAreaResource\Pages;

use App\Filament\Resources\ThematicAreaResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateThematicArea extends CreateRecord
{
    protected static string $resource = ThematicAreaResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = str($data['title'])->slug();

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Thematic area article created')
            ->body('A new thematic area article has been created successfully.');
    }
}
