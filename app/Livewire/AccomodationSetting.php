<?php

namespace App\Livewire;

use App\Models\Accomodation;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms;
use App\Rules\UniqueTogether;
use Closure;
use Filament\Forms\Get;
use Filament\Notifications\Notification;
use Livewire\Component;

class AccomodationSetting extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(Accomodation::query())
            ->columns([
                Tables\Columns\TextColumn::make('index')
                    ->rowIndex(isFromZero: false)
                    ->label('S/N'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Room Name'),
                Tables\Columns\TextColumn::make('bed_no')
                    ->label('Bed Number'),
                Tables\Columns\TextColumn::make('status')
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->model(Accomodation::class)
                    ->slideOver()
                    ->form([
                        Forms\Components\TextInput::make('name')
                            ->required(),
                        Forms\Components\Select::make('bed_no')
                            ->options([
                                'bed A' => 'bed A',
                                'bed B' => 'bed B',
                                'bed C' => 'bed C',
                                'bed D' => 'bed D',
                                'bed E' => 'bed E',
                                'bed F' => 'bed F',
                            ])
                            ->unique('bed_no', fn (Closure $get) => $get('name'))
                           ->required(),
                        Forms\Components\Select::make('status')
                            ->options([
                                'Available' => 'Available',
                                'Not Available' => 'Not Available',
                            ])
                            ->required()
                            ->default('Available')
                    ])
                    ->using(function (array $data) {
                        if (Accomodation::where('name', $data['name'])->where('bed_no', $data['bed_no'])->exists())
                        {
                             Notification::make()
                                ->title('Record Alreday Exists')
                                ->danger()
                                ->send();
                            }else{
                                 Accomodation::create($data);
                                Notification::make()
                                ->title('accomodation created successfully')
                                ->success()
                                ->send();
                            }

                    }),
            ]);
    }
    public function render()
    {
        return view('livewire.accomodation-setting')->layout('layouts.app');
    }
}
