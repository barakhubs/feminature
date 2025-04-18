<?php

namespace App\Filament\Resources\PublicationResource\Pages;

use App\Filament\Resources\PublicationResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditPublication extends EditRecord
{
    protected static string $resource = PublicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSAvedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Publication updated')
            ->body('A publication has been updated successfully.');
    }
}
