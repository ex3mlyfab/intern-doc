<?php

namespace App\Livewire;

use App\Models\InternDoctor;
use App\Models\PostingRecord;
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
                ->query(PostingRecord::query()->where('posting_status', '0'))
                ->columns([

                    Tables\Columns\TextColumn::make('index')
                        ->rowIndex(isFromZero: false),
                    Tables\Columns\ImageColumn::make('internDoctor.avatar')
                        ->circular()
                        ->defaultImageUrl(url('/images/no-image.png')),
                    Tables\Columns\TextColumn::make('internDoctor.fullname')
                        ->label("Intern Name"),
                    Tables\Columns\TextColumn::make('department.name')
                        ->label('Department'),
                    Tables\Columns\TextColumn::make('posting_start_date')
                        ->label('From Date'),
                    Tables\Columns\TextColumn::make('posting_end_date')
                        ->label('To Date'),
                    Tables\Columns\TextColumn::make('training_status')
                        ->badge()
                        ->color(fn (string $state): string => match ($state) {
                            'Posted' => 'gray',
                            'Active' => 'warning',
                            'Done' => 'success',
                        })
                ])
                ->actions([
                    Tables\Actions\Action::make('evaluate')
                    ->url(fn (PostingRecord $record): string => route('evaluate.show', $record))
                    ->icon('heroicon-m-document')
                ]);

    }
    public function render()
    {
        return view('livewire.performance')->layout('layouts.app');
    }
}
