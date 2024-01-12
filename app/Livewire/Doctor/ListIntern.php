<?php

namespace App\Livewire\Doctor;

use App\Models\InternDoctor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\imports\InternDoctorImporter;

class ListIntern extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(InternDoctor::query())
            ->columns([
                Tables\Columns\TextColumn::make('index')
                ->rowIndex(isFromZero: false)
                    ->label('S/N'),
                Tables\Columns\ImageColumn::make('avatar')
                    ->circular()
                    ->defaultImageUrl(url('/images/no-image.png')),

                Tables\Columns\TextColumn::make('fullname')
                    ->label("Full Name")
                    ->searchable(isIndividual: true, isGlobal: false),
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
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\ImportAction::make()
                ->importer(InternDoctorImporter::class),
                Tables\Actions\CreateAction::make()
                    ->url(fn() => route('doctor.create'))
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->url(fn (InternDoctor $record):  string => route('doctor.edit', $record)),

                Tables\Actions\Action::make('show')
                    ->url(fn (InternDoctor $record): string => route('doctor.show', $record))
                    ->icon('heroicon-m-document')
            ])
            ->bulkActions([

            ]);
    }

    public function render(): View
    {
        return view('livewire.doctor.list-intern')->layout('layouts.app');
    }
}
