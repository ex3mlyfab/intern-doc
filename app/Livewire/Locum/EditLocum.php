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

class EditLocum extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public Doctor $record;
    public bool $submitting = false;

    public function mount(): void
    {
        $this->form->fill($this->record->attributesToArray());
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
        // $this->submitting =true;
        // $data = $this->form->getState();
        
        // $record = Doctor::create($data);
        // dd($record);
        $data = $this->form->getState();

        $this->record->update($data);
        Notification::make()
        ->title('Details Updated successfully')
        ->success()
        ->send();
        $this->submitting = false;
        redirect()->route('list.locum');
    }

    public function render(): View
    {
        return view('livewire.locum.edit-locum')->layout('layouts.app');
    }
}
