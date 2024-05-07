<?php

namespace App\Livewire;

use App\Filament\Exports\MonthlyReportExporter;
use App\Models\MonthlyReport;
use Filament\Actions\Exports\Enums\ExportFormat;
use Filament\Actions\Exports\Models\Export;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class MonthlySuperReport extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public $report_month;


    public function render()
    {
        return view('livewire.monthly-super-report');
    }

    public function table(Table $table): Table
    {
        return $table
        ->query(MonthlyReport::query(function(Builder $query){
            $query->whereMonth('assessment_period','=', $this->report_month->format('m'))->whereYear('assessment_period','=', $this->report_month->format('y'));
        }))
        ->columns([
            Tables\Columns\TextColumn::make('index')
            ->rowIndex(isFromZero: false)
                ->label('S/N'),
            Tables\Columns\TextColumn::make('doctor.name')
                ->label('Full Name'),
            Tables\Columns\TextColumn::make('doctor.designation')
                ->label('Designation'),
            Tables\Columns\TextColumn::make('doctor.bank')
                ->label('Bank'),
            Tables\Columns\TextColumn::make('doctor.account_number')
                ->label('Account Number'),
            Tables\Columns\TextColumn::make('response'),
            Tables\Columns\TextColumn::make('comment'),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Assessment Date'),
            Tables\Columns\TextColumn::make('supervisor.fullname')

        ])
        ->headerActions([
            // Tables\Actions\ExportAction::make()
            //     ->exporter(MonthlyReportExporter::class)
            //     ->icon('heroicon-o-document-arrow-down')
            //     ->color('success')
            //     ->formats([
            //         ExportFormat::Csv
            //     ])
            //     ->fileName(fn (Export $export): string => "monthlyReports-{$export->getKey()}.csv")
            //     // ->after(function() {
            //     //     $id = Export::latest()?->first()?->id;
            //     //     $path = 'filament_exports/' . $id . '/monthlyReport' . $id . '.xlsx';


            //     //     //  you can change the filename based on the Exporter

            //     //     if (Storage::disk('public')->exists($path)) {
            //     //         return response()->stream(
            //     //             function () use ($path, $id) {
            //     //                 $stream = Storage::disk('public')->readStream($path);
            //     //                 fpassthru($stream);
            //     //                 fclose($stream);

            //     //                 Storage::disk('public')->deleteDirectory('filament_exports/' . $id);
            //     //                 Export::truncate();
            //     //             },
            //     //             200,
            //     //             [
            //     //                 'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            //     //                 'Content-Disposition' => 'attachment; filename=' . $id . '.xlsx',
            //     //             ]
            //     //         );

            //     //     } else {
            //     //         abort(404, 'file is corrupted');
            //     //     }
            //     // })
        ]);
    }
}
