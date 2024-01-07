<?php

namespace App\Livewire;

use App\Models\InternDoctor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Filament\Infolists;
use Livewire\Component;

class EvaluateIntern extends Component implements HasInfolists, HasForms
{
    use InteractsWithInfolists, InteractsWithForms;
    public ?array $permissions = [];

    public bool $submitting =false;
    public InternDoctor $record;
    public $posting_record_id,
           $kabms,
           $kaacs,
            $kpbms,
            $locc,

            $mr_ht,
            $mr_aw,
            $mr_pn,
            $mr_cs,
            $diagnostic_acumen,
            $kaat,
            $iwomoht,
            $cwpe,
            $artc,
            $tutl,
            $atpcdr,
            $atlaacs,
            $auodf,
            $side_laboratories,
            $laboratory_request,
            $radiology_request,
            $follow_up_of_results,
            $puntuality,
            $availability,
            $endurance,
            $personal_comportment,
            $neatness,
            $sense_of_responsibility,
            $interpersonal,
            $rwha,
            $overall_evaluation,
            $general_comments,
            $is_fit,
            $if_is_fit_is_no_comment;


    public function infolist(Infolist $infolist): Infolist
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
    public function store()
    {

    }
    public function render()
    {
        return view('livewire.evaluate-intern')->layout('layouts.app');
    }
}
