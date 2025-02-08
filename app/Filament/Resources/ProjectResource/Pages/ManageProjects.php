<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;
use Filament\Support\Enums\MaxWidth;
use Str;

class ManageProjects extends ManageRecords
{
    protected static string $resource = ProjectResource::class;

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
                        ->title('Project created')
                        ->body('The project has been created successfully.'),
                ),
        ];
    }
}
