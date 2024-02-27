<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class InternDoctor extends Authenticatable
{
    use HasUuids;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    // use HasTeams;
    use Notifiable;
    // use TwoFactorAuthenticatable;
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
        'password'

    ];

    protected $hidden = [
        'passphrase',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $cast = [
        'medical_school_starts' => 'datetime',
        'medical_school_ends' => 'datetime',
        'qualification_obtained_date' => 'datetime',
        'email_verified_at' => 'datetime',
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
    public function accomodationCharges(): HasMany
    {
        return $this->hasMany(AccomodationCharge::class);
    }

    public function assignAccomodation(): HasOne
    {
        return $this->hasOne(AssignAccomodation::class);
    }
}

