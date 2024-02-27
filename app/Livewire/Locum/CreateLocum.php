<?php

namespace App\Livewire\Locum;

use App\Models\Doctor;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;

class CreateLocum extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public bool $submitting = false;

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Full Name')
                            ->hint("Enter employee full name along with title")
                            ->columnSpanFull()
                            ->required(),
                        Forms\Components\TextInput::make('designation')
                            ->required(),
                        Forms\Components\Select::make('employment_type')
                            ->options([
                                'NYSC' => 'NYSC',
                                'CONSULTANT' => 'CONSULTANT',
                                'LOCUM' => 'LOCUM',
                                'INTERN' => 'INTERN',
                                'CONTRACT' => 'CONTRACT'
                            ])
                            ->label('Employment Type')
                            ->required(),
                        Forms\Components\TextInput::make('bank_name'),
                        Forms\Components\TextInput::make('account_number'),
                        Forms\Components\Select::make('department_id')
                            ->relationship('department', 'name')
                            ->searchable()
                            ->required()
                            ->preload(),
                        Forms\Components\Select::make('posting_id')
                            ->relationship('posting', 'name')
                            ->searchable()
                            ->required()
                            ->preload(),
                    ])
                //
            ])
            ->statePath('data')
            ->model(Doctor::class);
    }

    public function create(): void
    {

        $data = $this->form->getState();

        $record = Doctor::create($data);
        // dd($record);

        Notification::make()
        ->title('Details Saved successfully')
        ->success()
        ->send();
        
        redirect()->route('locum.list');
    }

    public function render(): View
    {
        return view('livewire.locum.create-locum')->layout('layouts.app');
    }
}
