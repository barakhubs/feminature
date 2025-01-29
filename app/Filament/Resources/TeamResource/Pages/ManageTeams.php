<?php

namespace App\Filament\Resources\TeamResource\Pages;

use App\Filament\Resources\TeamResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;
use Filament\Support\Enums\MaxWidth;

class ManageTeams extends ManageRecords
{
    protected static string $resource = TeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->slideOver()
            ->modalWidth(MaxWidth::Medium)
            ->successNotification(
                Notification::make()
                    ->success()
                    ->title('Team member created')
                    ->body('The team member has been created successfully.'),
            ),
        ];
    }
}
