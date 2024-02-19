<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PostingRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'intern_doctor_id',
        'department_id',
        'posting_start_date',
        'posting_end_date',
        'posting_status',
        'accept_posting',
        'accepted_by',
        'created_by',
        'approved_by',
    ];

    protected $cast = [
        'posting_start_date'=>'datetime',
        'posting_end_date'=>'datetime',
    ];

    public function internDoctor(): BelongsTo
    {
        return $this->belongsTo(InternDoctor::class);
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function approvedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
    public function acceptedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'accepted_by');
    }

    public function performaceEvaluation(): HasOne
    {
        return $this->hasOne(PerformanceEvaluation::class, 'posting_record_id');
    }
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    public function assessorRequest(): HasOne
    {
        return $this->hasOne(AssessorRequest::class, 'posting_record_id');
    }
    public function getTrainingStatusAttribute(): string
    {
        switch($this->posting_status) {
            case 0:
                return "Posted";
                break;
            case 1:
                return "Active";
                break;
            case 2:
                return "Done";
                break;


    }
}

}
