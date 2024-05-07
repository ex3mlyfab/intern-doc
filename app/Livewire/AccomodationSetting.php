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
                            ->required()
                            ->unique('accomodations', 'name', null, 'bed_no',function($rule, Get $get){

                                return $rule->where('bed_no', $get('bed_no'));
                            }),
                        Forms\Components\Select::make('bed_no')
                            ->options([
                                'bed A' => 'bed A',
                                'bed B' => 'bed B',
                                'bed C' => 'bed C',
                                'bed D' => 'bed D',
                                'bed E' => 'bed E',
                                'bed F' => 'bed F',
                            ])
                            ->unique('accomodations', 'bed_no', null, 'name',function($rule, Get $get){

                                return $rule->where('name', $get('name'));
                            })
                           ->required(),
                        Forms\Components\Select::make('status')
                            ->options([
                                'Available' => 'Available',
                                'Not Available' => 'Not Available',
                            ])
                            ->required()
                            ->default('Available')
                    ])
            ]);
    }
    public function render()
    {
        return view('livewire.accomodation-setting')->layout('layouts.app');
    }
}
