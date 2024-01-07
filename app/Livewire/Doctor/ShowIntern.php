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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
                    ->form([
                        Forms\Components\Grid::make(3)
                        ->schema([
                            Forms\Components\Select::make('department_id')
                                ->relationship(name: 'department', titleAttribute: 'name')
                                ->required(),
                            Forms\Components\DatePicker::make('posting_start_date')
                                ->label('From Date')
                                ->required(),
                            Forms\Components\DatePicker::make('posting_end_date')
                                ->after('posting_start_date')
                                ->label('To Date')
                                ->required(),
                            Forms\Components\Hidden::make('intern_doctor_id')
                                ->default($this->record->id),
                            Forms\Components\Hidden::make('created_by')
                                ->default(auth()->user()->id)
                        ])


                    ])
                    ->closeModalByClickingAway(false),
                    Tables\Actions\DeleteAction::make()
                    ->successRedirectUrl(route('posts.list'))
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->model(PostingRecord::class)
                    ->form([

                                Forms\Components\Grid::make(3)
                                    ->schema([
                                        Forms\Components\Select::make('department_id')
                                            ->relationship(name: 'department', titleAttribute: 'name')
                                            ->required(),
                                        Forms\Components\DatePicker::make('posting_start_date')
                                            ->label('From Date')
                                            ->required(),
                                        Forms\Components\DatePicker::make('posting_end_date')
                                            ->after('posting_start_date')
                                            ->label('To Date')
                                            ->required(),
                                        Forms\Components\Hidden::make('intern_doctor_id')
                                            ->default($this->record->id),
                                        Forms\Components\Hidden::make('created_by')
                                            ->default(auth()->user()->id)
                                    ])


                    ])
                    // // ->mutateFormDataUsing(function (array $data): array {

                    // //    foreach($data['posting_records'] as $posting => $value){
                    // //        $data['posting_records'][$posting]['intern_doctor_id']= $this->record->id;
                    // //    }
                    // // //    dd($data);
                    // //    return $data;
                    // // })
                    // ->using(function (array $data, string $model): Model {
                    //     // dd($data);
                    //     $final_array = [];
                    //     foreach($data['posting_records'] as $posting => $value){
                    //                $data['posting_records'][$posting]['intern_doctor_id']= $this->record->id;
                    //             }
                    //     // foreach($data['posting_records'] as $posting => $value){
                    //     //    $final_array [] = [
                    //     //     'intern_doctor_id' => $value['intern_doctor_id'],
                    //     //     'department_id' => $value['department_id'],
                    //     //     'posting_start_date' => $value['posting_start_date'],
                    //     //     'posting_end_date' => $value['posting_end_date'],
                    //     //    ];
                    //     // }
                    //         $final_array = collect($final_array);
                    //     dd(($final_array));
                    //    return $model::insert($final_array);

                    // })
                    ->closeModalByClickingAway(false)
                    ->createAnother(false)
                    ->hidden(function(){
                        return $this->record->postingRecords->count() == 4;
                    })
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
                                                    ->defaultImageUrl(url('/images/fmc_logo.png'))
                                                    ->columnSpanFull()
                                                    ->extraAttributes(['class' => 'flex items-center justify-center'])
                                                    ,
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
                                                Infolists\Components\TextEntry::make('mdcan_reg_number')
                                                    ->label('MDCAN Registration Number'),
                                                Infolists\Components\TextEntry::make('mdcan_reg_date')
                                                    ->label('MDCAN Registraion Date')
                                                    ->dateTime(),


                                                ])

                            ]);
    }
}
