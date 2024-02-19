<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Qualification extends Model
{
    use HasFactory;

    protected $fllable = [
        'qualifiable_type',
        'qualifiable_id',
        'name',
        'qualification_date',
        'type'
    ];

    protected $casts = [
        'qualification_date' => 'datetime',
    ];

    public function qualifiable(): MorphTo
    {
        return $this->morphTo();
    }
}
