<?php

namespace App\Livewire\Doctor;

use App\Models\InternDoctor;
use App\Models\PostingRecord;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Support\Enums\IconPosition;
use Filament\Infolists\Infolist;
use Filament\Infolists;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms;
use Livewire\Component;

class ShowIntern extends Component implements HasForms, HasInfolists, HasTable
{
    use InteractsWithForms, InteractsWithInfolists, InteractsWithTable;

    public InternDoctor $record;
    public function render()
    {
        return view('livewire.doctor.show-intern')->layout('layouts.app');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(PostingRecord::query()->where('intern_doctor_id',$this->record->id))
            ->columns([

                Tables\Columns\TextColumn::make('department.name'),
                Tables\Columns\TextColumn::make('posting_start_date'),
                Tables\Columns\TextColumn::make('posting_end_date'),
                Tables\Columns\TextColumn::make(''),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->model(PostingRecord::class)
                    ->form([
                        Forms\Components\Repeater::make('Posting Records')
                            ->schema([
                                Forms\Components\Grid::make(3)
                                    ->schema([
                                        Forms\Components\Select::make('department_id')
                                            ->relationship(name: 'department', titleAttribute: 'name')
                                            ->required()

                                            ->unique()
                                            ->disableOptionsWhenSelectedInSiblingRepeaterItems(),
                                        Forms\Components\DatePicker::make('posting_start_date')
                                            ->label('Posting Starts')
                                            ->required(),
                                        Forms\Components\DatePicker::make('posting_end_date')
                                            ->label('Posting Ends')
                                            ->required()
                                    ])
                            ])
                            ->maxItems(4)
                    ])
                    ]);
    }
    public function internInfolist(Infolist $infolist): Infolist
    {
        return $infolist
                    ->record($this->record)
                    ->schema([

                     Infolists\Components\Section::make('Doctor Information')
                                            ->columns(3)
                                            ->schema([
                                                Infolists\Components\ImageEntry::make('avatar')
                                                    ->defaultImageUrl(url('/images/fmc_logo.png')),
                                                Infolists\Components\TextEntry::make('fullname')
                                                    ->size(Infolists\Components\TextEntry\TextEntrySize::Large),
                                                Infolists\Components\TextEntry::make('email')
                                                    ->size(Infolists\Components\TextEntry\TextEntrySize::Large),
                                                Infolists\Components\TextEntry::make('phone')
                                                    ->size(Infolists\Components\TextEntry\TextEntrySize::Large),
                                                Infolists\Components\TextEntry::make('permanent_address'),
                                                Infolists\Components\TextEntry::make('medical_school'),
                                                Infolists\Components\TextEntry::make('medical_school_starts')
                                                    ->label('Medical School Starts')
                                                    ->dateTime(),
                                                Infolists\Components\TextEntry::make('medical_school_ends')
                                                    ->label('Medical School Ends')
                                                    ->dateTime(),
                                                Infolists\Components\TextEntry::make('qualification_obtained'),
                                                Infolists\Components\TextEntry::make('qualification_obtained_date')
                                                    ->dateTime(),
                                                Infolists\Components\TextEntry::make('mdcan_reg_number'),
                                                Infolists\Components\TextEntry::make('mdcan_reg_date')
                                                    ->dateTime(),


                                                ])

                            ]);
    }
}
