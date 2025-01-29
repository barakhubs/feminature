<?php

namespace App\Filament\Resources\ThematicAreaResource\Pages;

use App\Filament\Resources\ThematicAreaResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditThematicArea extends EditRecord
{
    protected static string $resource = ThematicAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['slug'] = str($data['title'])->slug();

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSAvedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Thematic area article updated')
            ->body('A thematic area article has been updated successfully.');
    }
}
