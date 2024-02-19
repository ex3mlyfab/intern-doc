<?php

namespace App\Livewire\Locum;

use App\Filament\Imports\DoctorImporter;
use App\Models\Doctor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;

class ListLocum extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(Doctor::query())
            ->searchable()
            ->columns([
                Tables\Columns\TextColumn::make('index')
                ->rowIndex(isFromZero: false)
                    ->label('S/N'),
                Tables\Columns\TextColumn::make('name')
                    ->label("Full Name")
                    ->searchable(),
                Tables\Columns\TextColumn::make('designation'),
                Tables\Columns\TextColumn::make('employment_type'),
                Tables\Columns\TextColumn::make('department.name')
                    ->label('Department'),
                Tables\Columns\TextColumn::make('posting.name')
                    ->label('Posting'),
                Tables\Columns\TextColumn::make('account_number'),
                Tables\Columns\TextColumn::make('bank'),
                Tables\Columns\ToggleColumn::make('is_active')

            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\ImportAction::make()
                    ->label('Import Locum')
                    ->importer(DoctorImporter::class),
                Tables\Actions\CreateAction::make()
                    ->label('Add Locum')
                    ->url(fn() => route('locum.create'))
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->url(fn (Doctor $record):  string => route('locum.edit', $record)),

                Tables\Actions\Action::make('show')
                    ->url(fn (Doctor $record): string => route('locum.show', $record))
                    ->icon('heroicon-m-document')
            ])
            ->bulkActions([

            ])
            ->emptyStateHeading('No record added yet')
            ->emptyStateDescription('Staff records appear here.');
    }

    public function render(): View
    {
        return view('livewire.locum.list-locum')->layout('layouts.app');
    }
}
