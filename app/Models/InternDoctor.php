<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InternDoctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'surname',
        'first_name',
        'middle_name',
        'permanent_address',
        'email',
        'phone',
      'medical_school',
      'medical_school_starts',
      'medical_school_ends',
        'qualification_obtained',
        'qualification_obtained_date',
      'mdcan_reg_number',
      'mdcan_reg_date',
        'intern_status',
        'passphrase'

    ];

    protected $hidden = [
        'passphrase'
    ];

    protected $cast = [
        'medical_school_starts' => 'datetime',
        'medical_school_ends' => 'datetime',
        'qualification_obtained_date' => 'datetime',
    ];
    public function postingRecords(): HasMany
    {
        return $this->hasMany(PostingRecord::class);
    }

    public function getFullnameAttribute(): string
    {
        return  ucwords($this->surname . " ". $this->first_name . " ". $this->middle_name);
    }

    public function getTrainingStatusAttribute(): string
    {
        switch ($this->intern_status) {
            case 0:
                return "Registered";
                break;
            case 1:
                return "In Training";
                break;
            case 2:
                return "Completed Training";
                break;
        }
    }
}

