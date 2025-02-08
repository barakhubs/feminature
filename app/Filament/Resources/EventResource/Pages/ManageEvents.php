<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;
use Filament\Support\Enums\MaxWidth;

class ManageEvents extends ManageRecords
{
    protected static string $resource = EventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->slideOver()
                ->modalWidth(MaxWidth::Medium)
                ->label('Create Project')
                ->mutateFormDataUsing(function (array $data): array {
                    $data['slug'] = \Str::slug($data['title']);

                    return $data;
                })
                ->successNotification(
                    Notification::make()
                        ->success()
                        ->title('Event created')
                        ->body('The event has been created successfully.'),
                ),
        ];
    }
}
