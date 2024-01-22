<?php

namespace App\Livewire;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class InternSelfShow extends Component implements HasForms, HasInfolists, HasTable
{
    use InteractsWithForms, InteractsWithInfolists, InteractsWithTable;

    public InternDoctor $record;

    public function mount()
    {
        $this->record = Auth::user();
    }
    public function render()
    {
        return view('livewire.intern-self-show')->layout('layouts.app');
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

                Tables\Actions\Action::make('performance_evaluation')
                    ->url(fn (PostingRecord $record): string => route('pev.self', $record))
                    ->icon('heroicon-m-document')
                    ->hidden(fn (PostingRecord $record): bool => !$record->performaceEvaluation()->exists())


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
                                                Infolists\Components\ImageEntry::make('profile_photo_path')
                                                    ->label(' ')
                                                    ->defaultImageUrl(url('/images/no-image.png'))
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
                                                ->headerActions([
                                                    Infolists\Components\Actions\Action::make('edit_profile')
                                                        ->url(fn (InternDoctor $record):  string => route('intern-self.edit', $record))
                                                ])

                            ])

                            ;
    }
}
