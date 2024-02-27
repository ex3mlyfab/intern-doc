<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccomodationCharge extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'intern_doctor_id',
        'accomodation_id',
        'month',
        'status',
        'amount',
    ];

    public function internDoctor(): BelongsTo
    {
        return $this->belongsTo(InternDoctor::class, 'intern_doctor_id');

    }

    public function accomodation(): BelongsTo
    {
        return $this->belongsTo(Accomodation::class, 'accomodation_id');
    }
}
