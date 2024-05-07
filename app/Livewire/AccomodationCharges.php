<?php

namespace App\Livewire;

use App\Models\AccomodationCharge;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms;
use Livewire\Component;

class AccomodationCharges extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    public $internDoctor;
    public $room_no;
    public $room_id;
    public $assignedDate;
    public function table(Table $table): Table
    {
        return $table
            ->query(AccomodationCharge::query()->where('intern_doctor_id', $this->internDoctor))
            ->columns([
                Tables\Columns\TextColumn::make('index')
                    ->rowIndex(isFromZero: false)
                    ->label('S/N'),
                Tables\Columns\TextColumn::make('month')
                    ->date('M-Y'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color('success')
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Add Accomodation Charges')
                    ->model(AccomodationCharge::class)
                    ->slideOver()
                    ->form([
                        Forms\Components\DatePicker::make('month')
                            ->native(false)
                            ->required(),
                        Forms\Components\Select::make('status')
                            ->options([
                                'paid' => 'Paid',
                                'Not Yet Paid' => 'not Yet Paid'
                            ])
                            ->default('paid')
                            ->required(),
                        Forms\Components\TextInput::make('amount')
                            ->numeric()
                            ->required(),
                        Forms\Components\Hidden::make('intern_doctor_id')
                            ->default($this->internDoctor),
                        Forms\Components\Hidden::make('accomodation_id')
                            ->default($this->room_id),
                        Forms\Components\Hidden::make('user_id')
                            ->default(auth()->user()->id),
                    ])
            ])
            ->paginated([3]);
    }

    public function render()
    {
        return view('livewire.accomodation-charges');
    }
}
