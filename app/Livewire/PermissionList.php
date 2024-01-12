<?php

namespace App\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Notifications\Notification;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionList extends Component implements HasForms
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
                ->columns(2)
                ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Role Name')
                    ->required()
                    ->string(),
                Forms\Components\Select::make('permissions')
                    ->options(Permission::all()->pluck('name', 'id'))
                    ->preload()
                    ->multiple()
                    ->searchable()
                    // ->createOptionForm([
                    //     Forms\Components\TextInput::make('name'),
                    //     Forms\Components\Hidden::make('guard_name')
                    //     ->default('sanctum')
                    // ])
                    // ->createOptionUsing(function(array $data){
                    //     return Permission::create($data);
                    // })
                ])

            ])
            ->statePath('data')
            ->model(Role::class);;
    }
    public function create(): void
    {
        $this->submitting =true;
        $data = $this->form->getState();
        $permissions = $data['permissions'];
        $record = Role::create($data);

        $record->syncPermissions($permissions);

        // $this->form->model($record)->saveRelationships();
        Notification ::make()
        ->title('Intern Doctor Saved successfully')
        ->success()
        ->send();
        $this->submitting = false;
        redirect()->route('list.intern');
    }
    public function render()
    {
        return view('livewire.permission-list')->layout('layouts.app');
    }
}
