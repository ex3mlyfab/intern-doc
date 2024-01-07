<?php

namespace App\Livewire\Admin;

use App\Models\Department;
use App\Models\User;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Forms\Get;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\Permission\Models\Role;

class EditUser extends Component
{
    use WithFileUploads;
    public ?array $data = [];
    public ?array $qualification = [];
    public ?array $mdcan_qualification = [];
    public $adding = [''];
    public $adding_mdcan = [''];
    public $image,
            $surname,
            $first_name,
            $middle_name,
            $phone,
            $email,
            $rank;
    public User $record;


     public function addQualification(){
        $this->adding[] = " ";
    }
     public function addMQualification(){
        $this->adding_mdcan[] = " ";
    }

    public function render()
    {
        return view('livewire.admin.edit-user')->layout('layouts.app');
    }
    public function removeQualification($index)
    {

        unset($this->adding[$index]);

        $this->adding = array_values($this->adding);

    }
    public function removeMQualification($index)
    {

        unset($this->adding_mdcan[$index]);

        $this->adding_mdcan = array_values($this->adding_mdcan);

    }

    public function updateProfileInformation(UpdatesUserProfileInformation $updater)
    {
        $this->resetErrorBag();

        $updater->update(
            $this->record,
            $this->photo
                ? array_merge($this->state, ['photo' => $this->photo])
                : $this->state
        );

        if (isset($this->photo)) {
            return redirect()->route('profile.show');
        }

        $this->dispatch('saved');

        $this->dispatch('refresh-navigation-menu');
    }

    public function deleteProfilePhoto()
    {
        $this->record->deleteProfilePhoto();

        $this->pagereset();
    }
}
