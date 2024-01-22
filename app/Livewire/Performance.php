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
use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Performance extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
                ->query(PostingRecord::query()->whereIn('posting_status', [0,1]))
                ->columns([

                    Tables\Columns\TextColumn::make('index')
                        ->rowIndex(isFromZero: false),
                    Tables\Columns\ImageColumn::make('internDoctor.avatar')
                        ->circular()
                        ->defaultImageUrl(url('/images/no-image.png')),
                    Tables\Columns\TextColumn::make('internDoctor.surname')
                        ->label("Surname")
                        ->searchable(),
                    Tables\Columns\TextColumn::make('internDoctor.first_name')
                        ->label("first_name")
                        ->searchable(),
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
                    Tables\Actions\EditAction::make()
                        ->label('Accept Intern')
                        ->form([
                            Forms\Components\Radio::make('accept_posting')
                                ->boolean()
                                ->inline(true),
                        ]) //collect its result and change posting status.
                        ->hidden(fn (PostingRecord $record): bool => $record->posting_status != 0)
                        ->successRedirectUrl(route('evaluate.list'))
                        ->successNotificationTitle('Intern Accepted')
                        ->using(function (Model $record, array $data): Model {
                            if($data['accept_posting']){
                                $data['accepted_by'] = Auth::user()->id;
                                $data['posting_status'] = 1;
                            }

                            $record->update($data);

                            return $record;
                        }),
                    Tables\Actions\Action::make('evaluate')
                        ->url(fn (PostingRecord $record): string => route('evaluate.show', $record))
                        ->icon('heroicon-m-document')
                        ->hidden(fn (PostingRecord $record): bool => $record->posting_status == 0 )

                ]);

    }
    public function render()
    {
        return view('livewire.performance')->layout('layouts.app');
    }
}
