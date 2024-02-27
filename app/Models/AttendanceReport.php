<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AttendanceReport extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'supervisor_id',
        'response_marked',
        'assessment_period'
    ];

    protected $casts = [
        'assessment_period' => 'datetime:m-y',
    ];
    public function Supervisor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'supervisor_id');
    }
}
