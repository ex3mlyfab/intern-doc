<?php

namespace App\Livewire;

use App\Models\MonthlyReport as ModelsMonthlyReport;
use Carbon\Carbon;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Date;
use Livewire\Component;

class MonthlyReport extends Component implements HasForms
{
    use InteractsWithForms;
    public $selectedMonth;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Select Month/Year')
                    ->schema([
                        Forms\Components\Select::make('select')
                            ->label('Select Report Month')
                            ->options(
                                ModelsMonthlyReport::query(function (Builder $query){
                                    $query->select('assessment_period')
                                        ->transform(fn ($row) => [
                                             Carbon::parse($row->assessment_period)->format('M-Y')
                                        ]);

                                })->distinct('assessment_period')->pluck('assessment_period', 'assessment_period')
                            )
                    ])
            ])
            ->statePath('data');
    }


    public function mount()
    {
        $this->selectedMonth = today();
    }
    public function render()
    {
        return view('livewire.monthly-report')->layout('layouts.app');
    }
}
