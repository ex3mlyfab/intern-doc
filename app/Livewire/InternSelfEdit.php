<?php

namespace App\Livewire;

use App\Models\InternDoctor;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class InternSelfEdit extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public InternDoctor $record;

    public function mount(): void
    {
        $this->record = Auth::user();
        $this->form->fill($this->record->attributesToArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->columns(3)
                    ->schema([
                         Forms\Components\TextInput::make('surname')
                            ->label('Surname')
                            ->required(),
                        Forms\Components\TextInput::make('first_name')
                            ->label('First Name')
                            ->required(),
                        Forms\Components\TextInput::make('middle_ame')
                            ->label('Middle Name'),
                        Forms\Components\TextInput::make('email')
                            ->label('Email Address')
                            ->email()
                            ->required(),
                        Forms\Components\TextInput::make('phone')
                            ->label('Phone Number')
                            ->required()
                            ->numeric(),
                        Forms\Components\Textarea::make('permanent_address'),
                        Forms\Components\FileUpload::make('profile_photo_path')
                            ->avatar()
                            ->columnSpanFull()
                    ]),
                Forms\Components\Section::make()
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('medical_school')
                            ->label('Medical School Attended'),
                        Forms\Components\DatePicker::make('medical_school_starts')
                            ->label('Medical School Start Date'),
                        Forms\Components\DatePicker::make('medical_school_ends')
                            ->label('Medical School Graduation Date'),
                        Forms\Components\TextInput::make('qualification_obtained'),
                        Forms\Components\DatePicker::make('qualification_obtained_date'),
                        Forms\Components\TextInput::make('mdcan_reg_number')
                            ->label('MDCAN registration Number'),
                        Forms\Components\DatePicker::make('mdcan_reg_date')
                            ->label('MDCAN registration Date'),
                        Forms\Components\Select::make('intern_status')
                            ->options([
                                0 => 'Submitted',
                                1 => 'In Training',
                                2 => 'Completed',
                            ]),
                    ])
                //
            ])
            ->statePath('data')
            ->model($this->record);
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $this->record->update($data);
        Notification::make()
        ->title('Intern Doctor Save updated successfully')
        ->success()
        ->send();

        redirect()->route('dashboard-intern');
    }

    public function render(): View
    {
        return view('livewire.intern-self-edit')->layout('layouts.app');
    }
}
