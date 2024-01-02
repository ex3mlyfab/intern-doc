<?php

namespace App\Livewire;



use Filament\Notifications\Notification;
use Illuminate\View\View;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateRole extends Component
{

    public ?array $data = [];
    public bool $submitting = false;
    public string $role_name =  '';
    public ?array $permissions = [];


    public function create()
    {
        $this->validate([
            'role_name' => 'required|string|unique:roles,name',
            'permissions' => 'required'
        ]);
        // dd($this->permissions);

        $role = Role::create([
            'name' => $this->role_name,
            'guard_name' => 'sanctum'
        ]);
        if($this->permissions){
            // foreach($this->permissions as $permit){
            //     // dd($permit);
            //     $this->permissions()->detach();
            //      $role->syncPermissions($permit);
            // }
            $role->permissions()->syncWithoutDetaching($this->permissions);
        }

        $this->role_name = '';
        $this->permissions = [];
        Notification::make()
        ->title('Role Created Succesfully')
        ->success()
        ->send();
        $this->submitting = false;
        redirect()->route('role.list');


    }



    public function render(): View
    {
        $stored_permissions = Permission::all();
        return view('livewire.create-role',[
            'stored_permissions' => $stored_permissions
        ]);
    }
}
