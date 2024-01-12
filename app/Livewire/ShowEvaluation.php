<?php

namespace App\Livewire;

use App\Models\PostingRecord;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Filament\Infolists;
use Livewire\Component;

class ShowEvaluation extends Component implements HasForms, HasInfolists
{
    use InteractsWithForms, InteractsWithInfolists;

    public PostingRecord $record;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
                    ->record($this->record->internDoctor)
                    ->schema([

                     Infolists\Components\Section::make('Doctor Information')
                                ->columns(3)
                                ->schema([
                                    Infolists\Components\ImageEntry::make('profile_photo_path')
                                        ->defaultImageUrl(url('/images/no-image.png'))
                                        ->label('')
                                        ->columnSpanFull()
                                        ->extraAttributes(['class' => 'flex items-center justify-center']),
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
    public function render()
    {
        return view('livewire.show-evaluation')->layout('layouts.app');
    }
}
