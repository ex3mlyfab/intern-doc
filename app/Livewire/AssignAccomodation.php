<?php

namespace App\Livewire;

use App\Models\Accomodation;
use App\Models\AssignAccomodation as ModelsAssignAccomodation;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Notifications\Notification;
use Livewire\Component;

class AssignAccomodation extends Component implements HasForms
{
    use InteractsWithForms;
    public ?array $data = [];

    public $internDoctor;
    public function mount(): void
    {
        $this->form->fill();
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Assign Accomodation')
                    ->schema([
                        Forms\Components\Select::make('accomodation_id')
                            ->label('Select Accomodation')
                            ->options(Accomodation::where('status','Available')->pluck('fullname', 'id'))
                            ->searchable()
                            ->required(),
                         ])

            ])
            ->statePath('data');
    }

    public function create()
    {
        $data = $this->form->getState();
        ModelsAssignAccomodation::create([
                'intern_doctor_id' => $this->internDoctor,
                'accomodation_id'   => $data['accomodation_id'],
                'assigment_date'  => now(),
                'status' => 'assigned'
        ]);
        Accomodation::where('id', $data['accomodation_id'])->update([
            'status' => 'Not Available'
        ]);
        Notification::make()
        ->title('Details Saved successfully')
        ->success()
        ->send();
        redirect()->route('doctor.show', $this->internDoctor);

    }
    public function render()
    {
        return view('livewire.assign-accomodation');
    }
}
