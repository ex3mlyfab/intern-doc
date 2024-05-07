<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignAccomodation extends Model
{
    use HasFactory;

    protected $fillable = [
        'intern_doctor_id',
        'accomodation_id',
        'assigment_date',
        'status',
        'end_date'
    ];

    protected $casts = [
        'assignment_date' => 'datetime:m-y',
        'end_date' => 'datetime:m-y',
    ];

    public function internDoctor(): BelongsTo
    {
        return $this->belongsTo(InternDoctor::class);
    }

    public function accomodation(): BelongsTo
    {
        return $this->belongsTo(Accomodation::class, 'accomodation_id');
    }
}
