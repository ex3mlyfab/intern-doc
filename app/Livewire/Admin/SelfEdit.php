<?php

namespace App\Livewire\Admin;

use App\Models\Department;
use App\Models\User;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Forms\Get;
use Filament\Notifications\Notification;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\Permission\Models\Role;

class SelfEdit extends Component
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

    public function mount()
    {
        $this->image = $this->record->profile_photo_path;
        $this->surname = $this->record->surname;
        $this->first_name =$this->record->first_name;
        $this->middle_name = $this->record->middle_name;
        $this->phone = $this->record->admin->phone;
        $this->email = $this->record->email;
        $this->rank = $this->record->rank;
        if($this->record->qualifications()->exists()){
            foreach($this->record->qualifications as $index =>$value){
                if($value->type == 1){
                    $this->qualification[$index]['name'] = $value->name;
                    $this->qualification[$index]['qualification_date'] = $value->qualification_date;
                    $this->adding[]= "";
                }else{
                    $this->mdcan_qualification[$index]['name'] = $value->name;
                    $this->mdcan_qualification[$index]['qualification_date'] = $value->qualification_date;
                    $this->adding_mdcan[] = "";
                }

            }
        }

    }
    public function update()
    {
        $data  = $this->validate([
            'surname' => ['required,string, max:225'],
            'first_name' => ['required,string'],
            'middle_name' => ['nullable,string'],
            'phone' => ['required,string', Rule::unique('admins')->ignore($this->record->admin->id)],
            'email' => ['required,string', Rule::unique('users')->ignore($this->record->id)],
            'rank' =>['nullable', 'string'],
        ]);
        $this->record->update([
            'surname' => $data['surname'],
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'email' => $data['email'],
        ]);

        $this->record->admin()->update([
            'phone' => $data['data'],
            'rank' => $data['rank'],
        ]);
        if(count($this->qualification) > 0){
            foreach($this->qualification as $key =>$value){
                $heck = $this->qualification[$key];
                $this->record->qualifications()->create([
                    'name' => $heck['name'],
                    'qualification_date' => $heck['qualification_date'],
                    'type' =>1
                ]);
            }

         }
         if(count($this->mdcan_qualification) > 0){
            foreach($this->mdcan_qualification as $key =>$value){
                $heck = $this->mdcan_qualification[$key];
                $this->record->qualifications()->create([
                    'name' => $heck['name'],
                    'qualification_date' => $heck['qualification_date'],
                    'type' =>2
                ]);
            }


          }
        Notification::make()
        ->title('User Saved successfully')
        ->success()
        ->send();
        // $this->submitting = false;
        redirect()->route('user.list');
    }
     public function addQualification()
     {
        $this->adding[] = " ";
    }
     public function addMQualification(){
        $this->adding_mdcan[] = " ";
    }

    public function render()
    {
        return view('livewire.admin.self-edit')->layout('layouts.app');
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
