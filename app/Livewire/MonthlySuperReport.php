<?php

namespace App\Livewire;

use App\Filament\Exports\MonthlyReportExporter;
use App\Models\MonthlyReport;
use Filament\Actions\Exports\Models\Export;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Date;
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
                ->label('Assessment Date')
                ->date('d-M-Y'),
            Tables\Columns\TextColumn::make('supervisor.fullname')

        ])
        ->headerActions([
            Tables\Actions\ExportAction::make()
                ->exporter(MonthlyReportExporter::class)
                ->fileName(fn (Export $export): string => "MonthlyReport-{$export->getKey()}.csv")
        ]);
    }
}
