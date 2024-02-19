<?php

namespace App\Filament\Imports;

use App\Models\Doctor;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class DoctorImporter extends Importer
{
    protected static ?string $model = Doctor::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('name')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('designation')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('employment_type')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('bank_name')
                ->rules(['max:255']),
            ImportColumn::make('account_number')
                ->rules(['max:255']),
            ImportColumn::make('department')
                ->requiredMapping()
                ->relationship()
                ->rules(['required']),
            ImportColumn::make('posting')
                ->requiredMapping()
                ->relationship()
                ->rules(['required']),
        ];
    }

    public function resolveRecord(): ?Doctor
    {
        // return Doctor::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new Doctor();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your Locum import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
