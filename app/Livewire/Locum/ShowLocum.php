<?php

namespace App\Livewire\Locum;

use App\Models\Doctor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Infolists;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Concerns\InteractsWithTable;
use Livewire\Component;

class ShowLocum extends Component implements HasForms, HasInfolists, HasTable
{
    use InteractsWithForms, InteractsWithInfolists, InteractsWithTable;
    public Doctor $record;

    public function internInfolist(Infolist $infolist): Infolist
    {
        return $infolist
                    ->record($this->record)
                    ->schema([

                        Infolists\Components\Section::make('Information')
                            ->columns(3)
                            ->schema([
                        Infolists\Components\TextEntry::make('fullname')
                            ->size(Infolists\Components\TextEntry\TextEntrySize::Large),
                        InfoLists\Components\TextEntry::make('designation')
                            ->size(Infolists\Components\TextEntry\TextEntrySize::Large),
                        InfoLists\Components\TextEntry::make('employment_type'),
                                            
                        ])
                    ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->defaultGroup('status')
            ->query(Doctor::query())
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable(isIndividual: true, isGlobal: false),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(isIndividual: true, isGlobal: false),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable(isIndividual: true, isGlobal: false),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
            ]);
    }                                         

    public function render()
    {
        return view('livewire.locum.show-locum')->layout('layouts.app');
    }
}
