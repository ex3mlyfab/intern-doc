<?php

namespace App\Livewire;

use App\Models\Doctor;
use Filament\Notifications\Notification;
use Livewire\Component;

class SuperMonthly extends Component
{


    public $clearedLocums= [];
    public $locumComments = [];
    public $selectAll = false;
    public $doctors;
    public function mount()
    {
        $this->doctors = Doctor::query()->whereIn('posting_id', auth()->user()->departments->pluck('id'))->where('is_active', true)->get();

    }
    public function store()
    {
        foreach($this->doctors as $doctor){
            // dd($doctor->latest_report);
            if(!$doctor->latest_report){

                $doctor->monthlyReports()->create([
                    'supervisor_id' => auth()->user()->id,
                    'assessment_period' => now(),
                    'response' => (in_array($doctor->id, $this->clearedLocums) ?'Cleared':'Uncleared'),
                    'comment' => $this->locumComments[$doctor->id] ?? 'Unsatisfactory'

                ]);
            }
        }


        Notification::make()
        ->title('Attendance Marked Successfully')
        ->success()
        ->send();
        redirect()->route('locum.list');

    }

    public function rowSelect($id)
    {
        if(in_array($id, $this->clearedLocums)){
           $this->locumComments[$id] = "Satisfactory";
        }else{
            
            $this->locumComments[$id]= '';
            $this->selectAll = false;
        }
    }
    public function selectallClick(){

        if($this->selectAll){
            $this->clearedLocums = $this->doctors->pluck('id')->toArray();
            foreach($this->doctors as $doctor)
            {
                $this->locumComments[$doctor->id] = "Satisfactory";
            }

        }else{
            $this->clearedLocums = [];
            foreach($this->doctors as $doctor)
            {
                $this->locumComments[$doctor->id] = '';
            }
        }
    }
    public function render()
    {


        return view('livewire.super-monthly')->layout('layouts.app');
    }
}
