<?php

namespace App\Filament\Resources\BlogCategoryResource\Pages;

use App\Filament\Resources\BlogCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Support\Str;
use Filament\Notifications\Notification;

class ManageBlogCategories extends ManageRecords
{
    protected static string $resource = BlogCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->slideOver()
                ->modalWidth(MaxWidth::Medium)
                ->mutateFormDataUsing(function (array $data): array {
                    $data['slug'] = Str::slug($data['title']);

                    return $data;
                })
                ->successNotification(
                    Notification::make()
                         ->success()
                         ->title('Category created')
                         ->body('The category has been created successfully.'),
                 ),
        ];
    }
}
