<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Assessor extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'assessor_request_id',
        'title',
        'first_name',
        'middle_name',
        'last_name',
        'email',
    ];

    public function assessorRequest(): BelongsTo
    {
        return $this->belongsTo(AssessorRequest::class);
    }

    public function admin(): MorphOne
    {
        return $this->morphOne(Admin::class, 'adminable');
    }
    public function getFullnameAttribute()
    {
        return ucwords($this->title.' '.$this->surname. ' '. $this->first_name. ' '. $this->middle_name);
    }

}
