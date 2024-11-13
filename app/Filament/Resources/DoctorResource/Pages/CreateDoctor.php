<?php

namespace App\Filament\Resources\DoctorResource\Pages;

use App\Filament\Resources\DoctorResource;
use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateDoctor extends CreateRecord
{
    protected static string $resource = DoctorResource::class;

    protected function afterCreate(): void
    {
        $doctor = $this->record;
        Notification::make()
            ->title('New Partner Created')
            ->icon('heroicon-o-eye-dropper')
            ->body("**New Mitra {$doctor->nama_mitra} created!**")
            ->actions([
                Action::make('View')->url(
                    DoctorResource::getUrl('edit', ['record' => $doctor])


                ),
            ])
            ->sendToDatabase(auth()->user());
    }
}
