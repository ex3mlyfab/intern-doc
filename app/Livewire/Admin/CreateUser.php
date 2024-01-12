<?php

namespace App\Livewire\Admin;

use App\Models\Department;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Forms\Get;
use Filament\Notifications\Notification;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateUser extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

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
                        Forms\Components\TextInput::make('surname')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('first_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('middle_name')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->unique()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->rules(['unique:admins,phone', 'required'])
                            ->maxLength(11),
                        Forms\Components\Select::make('role_id')
                            ->label('Role Name')
                            ->options(Role::all()->pluck('name', 'id'))
                            ->lazy()
                            ->required(),
                        Forms\Components\Select::make('department_id')
                            ->label('Select Department')
                            ->options(Department::all()->pluck('name', 'id'))
                            ->required(),
                        Forms\Components\FileUpload::make('profile_photo_path')
                            ->avatar(),

                            // Forms\Components\TextInput::make('mdcan_regno')
                        //     ->label('MDCAN RegigstrationNumber')
                        //     ->maxLength(255),
                        // Forms\Components\DatePicker::make('mdcan_reg_date')
                        //     ->label('MDCAN Registration Date'),
                        // Forms\Components\TextInput::make('rank'),
                        // Forms\Components\Repeater::make('qualifications')
                        //     ->schema([
                        //         Forms\Components\Grid::make(2)
                        //             ->schema([
                        //                 Forms\Components\TextInput::make('name')
                        //                     ->required(),
                        //                 Forms\Components\DatePicker::make('qualification_date')
                        //                     ->required(),
                        //                 Forms\Components\Hidden::make('type')
                        //                     ->default(1)
                        //             ])
                        //     ])
                        //     ->hidden(function(Get $get): bool{
                        //        return  $get('role_id') != 1 ;
                        //     }  ),
                        // Forms\Components\Repeater::make('mdcan_qualifications')
                        //     ->label('MDCAN Additional Qualification')
                        //     ->schema([
                        //         Forms\Components\Grid::make(2)
                        //             ->schema([
                        //                 Forms\Components\TextInput::make('name')
                        //                     ->required(),
                        //                 Forms\Components\DatePicker::make('qualification_date')
                        //                     ->required(),
                        //                 Forms\Components\Hidden::make('type')
                        //                     ->default(2)
                        //             ])
                        //     ])
                        //     ->hidden(function(Get $get): bool{
                        //        return  $get('role_id') != 1 ;
                        //     }  )



                    ])
            ])
            ->statePath('data')
            ->model(User::class);
    }


    public function create(): void
    {

        $data = $this->form->getState();
        // dd($data);

        $user_data=Arr::except( $data, ['phone', 'role_id', 'department_id']);
        // $data->except();
        $user_data['password'] = Hash::make($data['email']);
        $record = User::create($user_data);
        $record->admin()->create([
            'department_id' => $data['department_id'],
            'phone' => $data['phone'],
        ]);
        $record->roles()->attach($data['role_id']);
        Notification::make()
        ->title('User Saved successfully')
        ->success()
        ->send();
        // $this->submitting = false;
        redirect()->route('user.list');

    }

    public function render(): View
    {
        return view('livewire.admin.create-user')->layout('layouts.app');
    }
}
