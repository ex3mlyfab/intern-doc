<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssessorRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'posting_record_id',
        'email',
        'token',
    ];
    public function postingRecord(): BelongsTo
    {
        return $this->belongsTo(PostingRecord::class);
    }

}
