<?php

namespace App\Filament\Resources\PartnerResource\Pages;

use App\Filament\Resources\PartnerResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;
use Filament\Support\Enums\MaxWidth;

class ManagePartners extends ManageRecords
{
    protected static string $resource = PartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->slideOver()
                ->modalWidth(MaxWidth::Medium)
                ->mutateFormDataUsing(function (array $data): array {
                    $data['link'] = 'https://' . $data['link'];

                    return $data;
                })
                ->successNotification(
                    Notification::make()
                        ->success()
                        ->title('Partner created')
                        ->body('The partner has been created successfully.'),
                ),
        ];
    }
}
