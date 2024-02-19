<?php

namespace App\Livewire;

use App\Models\Doctor;
use App\Models\MonthlyReport;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms;
use Filament\Forms\Set;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MonthlySuper extends Component implements HasForms, HasTable
{
    use InteractsWithTable, InteractsWithForms;



    public function render()
    {
        return view('livewire.monthly-super')->layout('layouts.app');
    }

    public function table(Table $table): Table
    {
        return $table
        ->query(Doctor::query()->where('posting_id', auth()->user()->department->id)->where('is_active', true))
        ->columns([

            Tables\Columns\TextColumn::make('name')
                ->label("Full Name"),
            Tables\Columns\TextColumn::make('designation'),
            Tables\Columns\TextColumn::make('monthlyReports.response')
                ->badge()
                ->color(fn (string $state): string => match($state) {
                    'Present' => 'success',
                    'Absent'  => 'danger'
                }),
            Tables\columns\IconColumn::make('latest_report')
                ->label('status')
                ->icon(fn (string $state): string => match ($state) {
                    '1' => 'heroicon-o-check-circle',
                    '' => 'heroicon-o-clock'})
                ->color(fn (string $state): string => match($state) {
                    '1' => 'success',
                    ''  => 'danger'
                }),
            Tables\Columns\TextColumn::make('monthlyReports.assessment_period')
                ->date('M-Y')

        ])
        ->actions([

            Tables\Actions\EditAction::make()
                ->label('Mark Attendance')
               
                ->form([
                    Forms\Components\Section::make(fn (Doctor $record): string =>"Mark attendance for ". $record->name . " on ". now()->format("M-Y"))
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('response')
                            ->label('Response')
                            ->options([
                                'Present' => 'Present',
                                'Absent' => 'Absent',
                            ])
                            ->required()
                            ->live()
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('comment', $state == 'Present'? "Satisfactory": "Unsatisfactory")),//now()->parse($state)->addDays(82)->toDateString())
                        Forms\Components\TextInput::make('comment')
                            ->label('Comment')
                            ->required(),
                    ])

                ])
                ->using(function (Model $record, array $data): Model {
                    $record->monthlyReports()->create([
                        'response' => $data['response'],
                        'comment' => $data['comment'],
                        'assessment_period' => now(),
                        'supervisor_id' => auth()->user()->id
                    ]);
                    return $record;
                })
                ->successNotificationTitle('Attendance Marked')
                ->hidden(function (Doctor $record): bool{
                    if($record->monthlyReports()->exists()){
                         return date_format($record->monthlyReports->first()->assessment_period, 'm/y') == date('m/y');
                    }
                    return false;

                })

                // ->successRedirectUrl(route('locum.list')), attendance.list
            ])
            ->emptyStateHeading('No record added yet')
            ->emptyStateDescription('Locum records appear here.');
    }
}
