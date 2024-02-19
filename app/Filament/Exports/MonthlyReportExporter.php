<?php

namespace App\Filament\Exports;

use App\Models\MonthlyReport;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class MonthlyReportExporter extends Exporter
{
    protected static ?string $model = MonthlyReport::class;

    public static function getColumns(): array
    {
        return [
            // ExportColumn::make('index')
            //     ->rowIndex(isFromZero: false)
            //         ->label('S/N'),
            ExportColumn::make('doctor.name')
                ->label('Full Name'),
            ExportColumn::make('doctor.designation')
                ->label('Designation'),
            ExportColumn::make('doctor.employment_type')
                ->label('Employment Type'),
            ExportColumn::make('doctor.posting.name')
                ->label('Separtment Posted'),
            ExportColumn::make('doctor.bank')
                ->label('Bank Name'),
            ExportColumn::make('doctor.account_number')
                ->label('Account Number'),
            ExportColumn::make('response')
                ->label('Response'),
            ExportColumn::make('comment')
                ->label('Comment'),
            ExportColumn::make('ctreated_at')
                ->label('Date'),
            ExportColumn::make('supervisor.fullname')
                ->label('Supervisor'),
            //
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your monthly report export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
