<?php

namespace App\Filament\Imports;

use App\Models\InternDoctor;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class InternDoctorImporter extends Importer
{
    protected static ?string $model = InternDoctor::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('surname')
                ->requiredMapping()
                ->rules(['required', 'max:125']),
            ImportColumn::make('first_name')
                ->requiredMapping()
                ->rules(['required', 'max:125']),
            ImportColumn::make('middle_name')
                ->rules(['max:125']),
           ImportColumn::make('email')
                ->requiredMapping()
                ->rules(['required', 'email', 'max:255']),
            ImportColumn::make('phone')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('medical_school')
                ->rules(['max:255']),
            ImportColumn::make('medical_school_starts')
                ->rules(['date']),
            ImportColumn::make('medical_school_ends')
                ->rules(['date']),
            ImportColumn::make('qualification_obtained')
                ->rules(['max:255']),
            ImportColumn::make('qualification_obtained_date')
                ->rules(['date']),
            ImportColumn::make('mdcan_reg_number')
                ->rules(['max:255']),
            ImportColumn::make('mdcan_reg_date')
                ->rules(['date']),
            ImportColumn::make('intern_status')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
        ];
    }

    public function resolveRecord(): ?InternDoctor
    {
        // return InternDoctor::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new InternDoctor();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your intern doctor import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
