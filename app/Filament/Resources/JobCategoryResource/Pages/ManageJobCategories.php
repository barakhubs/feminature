<?php

namespace App\Filament\Resources\JobCategoryResource\Pages;

use App\Filament\Resources\JobCategoryResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Support\Str;

class ManageJobCategories extends ManageRecords
{
    protected static string $resource = JobCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->slideOver()
                ->modalWidth(MaxWidth::Medium)
                ->mutateFormDataUsing(function (array $data): array {
                    $data['slug'] = Str::slug($data['title']);

                    return $data;
                })
                ->successNotification(
                    Notification::make()
                        ->success()
                        ->title('Job Category created')
                        ->body('The category has been created successfully.'),
                ),
        ];
    }
}
