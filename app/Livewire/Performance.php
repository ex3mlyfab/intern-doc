<?php

namespace App\Livewire;

use App\Models\InternDoctor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Tables;
use Livewire\Component;

class Performance extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
                ->query(InternDoctor::query())
                ->columns([

                    Tables\Columns\TextColumn::make('index')
                        ->rowIndex(isFromZero: false),
                    Tables\Columns\ImageColumn::make('avatar')
                        ->circular()
                        ->defaultImageUrl(url('/images/fmc_logo.png')),
                    Tables\Columns\TextColumn::make('fullname')
                        ->label("Full Name"),
                    Tables\Columns\TextColumn::make('email')
                        ->label('Email Address'),
                    Tables\Columns\TextColumn::make('phone')
                        ->label('Phone Number'),
                    Tables\Columns\TextColumn::make('training_status')
                        ->badge()
                        ->color(fn (string $state): string => match ($state) {
                            'Registered' => 'gray',
                            'In Training' => 'warning',
                            'Completed Training' => 'success',
                        })
                ])
                ->actions([
                    Tables\Actions\Action::make('evaluate')
                    ->url(fn (InternDoctor $record): string => route('evaluate.show', $record))
                    ->icon('heroicon-m-document')
                ]);

    }
    public function render()
    {
        return view('livewire.performance');
    }
}
