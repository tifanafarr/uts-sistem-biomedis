<?php

namespace App\Filament\Resources\PatientResource\Pages;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Actions\Action as NotificationAction; // Use this for notification actions
use Filament\Notifications\Notification;

use App\Filament\Resources\PatientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPatient extends EditRecord
{
    protected static string $resource = PatientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->body('Changes to the post have been saved.')
            ->actions([
                NotificationAction::make('view')
                    ->button(),
                NotificationAction::make('undo')
                    ->color('gray'),
            ])
            ->send();
    }
}