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

    public function store()
    {
        foreach($this->doctors as $doctor){

            if($doctor->latest_report){
                $doctor->monthlyReports()->create([
                    'supervisor_id' => auth()->user()->id,
                    'assessment_period' => today()->format('m-Y'),
                    'response' => (in_array($doctor->id, $this->clearedLocums) ?'Cleared':'Uncleared'),
                    'comment' => $this->locumComments[$doctor->id] ?? 'Unsatisfactory'

                ]);
            }
        }
        auth()->user()->attendanceReports()->create([
            'response_marked' => count($this->doctors),
            'assessment_period' => today()->format('m-Y'),
        ]);
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
        $this->doctors = Doctor::query()->where('posting_id', auth()->user()->department->id)->where('is_active', true)->get();

        return view('livewire.super-monthly',[
            'doctors' => $this->doctors
        ])->layout('layouts.app');
    }
}
