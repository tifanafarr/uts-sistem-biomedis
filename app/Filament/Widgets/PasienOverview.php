<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Doctor;

class PasienOverview extends BaseWidget
{
    protected function getStats(): array
    {
            $doctor = Doctor::distinct('nama')->count();
    return [

        Stat::make('Jumlah Dokter', $doctor),
        // Stat lainnya jika diperlukan
    ];
    }
}
