<?php

namespace App\Livewire;

use App\Models\InternDoctor;
use App\Models\PostingRecord;
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
    public PostingRecord $record;
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
            $atutl,
            $atpcdr,
            $atlaacs,
            $auodf,
            $mat,
            $side_laboratories,
            $laboratory_request,
            $radiology_request,
            $follow_up_of_results,
            $punctuality,
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
                    ->record($this->record->internDoctor)
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
      $this->record->performaceEvaluation()->create([
        'kabms' => $this->kabms,
        'kaacs' => $this->kaacs,
            'kpbms' => $this->kpbms,
            'locc' => $this->locc,
            'mr_ht' => $this->mr_ht,
            'mr_aw' => $this->mr_aw,
            'mr_pn' => $this->mr_pn,
            'mr_cs' => $this->mr_cs,
            'diagnostic_acumen' => $this->diagnostic_acumen,
        'kaat' => $this->kaat,
        'mat' => $this->mat,
            'iwomoht' => $this->iwomoht,
            'cwpe' => $this->cwpe,
            'artc' => $this->artc,
            'atutl' => $this->atutl,
            'atpcdr' => $this->atpcdr,
            'atlaacs' => $this->atlaacs,
            'auodf' => $this->auodf,
            'side_laboratories' => $this->side_laboratories,
            'laboratory_request' => $this->laboratory_request,
            'radiology_request' => $this->radiology_request,
            'follow_up_of_results' => $this->follow_up_of_results,
            'punctuality' => $this->punctuality,
            'availability' => $this->availability,
            'endurance' => $this->endurance,
            'personal_comportment' => $this->personal_comportment,
            'neatness' => $this->neatness,
            'sense_of_responsibility' => $this->sense_of_responsibility,
            'interpersonal' => $this->interpersonal,
           'rwha' => $this->rwha,
            'overall_evaluation' => $this->overall_evaluation,
            'general_comments' => $this->general_comments,
            'is_fit' => $this->is_fit,
            'if_is_fit_is_no_comment' => $this->if_is_fit_is_no_comment

      ]);

    }
    public function render()
    {
        return view('livewire.evaluate-intern')->layout('layouts.app');
    }
}
