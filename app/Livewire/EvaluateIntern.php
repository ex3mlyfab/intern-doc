<?php

namespace App\Livewire;

use App\Models\InternDoctor;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Filament\Infolists;
use Livewire\Component;

class EvaluateIntern extends Component implements HasInfolists
{
    use InteractsWithInfolists;
    public InternDoctor $record;

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
                ])
                ]);

    }
    public function render()
    {
        return view('livewire.evaluate-intern');
    }
}
