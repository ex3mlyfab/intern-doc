<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostingRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'intern_doctor_id',
        'department_id',
        'posting_start_date',
        'posting_end_date',
        'posting_status',
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

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
