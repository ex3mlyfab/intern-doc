<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Accomodation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bed_no',
        'status',
    ];

    public function accomodationCharges(): HasMany
    {
        return $this->hasMany(AccomodationCharge::class);
    }

    public function assignAccomodation(): HasMany
    {
        return $this->hasMany(AssignAccomodation::class);
    }
}
