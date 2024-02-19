<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'user_id'
    ];
    public function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function postingRecords(): HasMany
    {
        return $this->hasMany(PostingRecord::class);
    }

    public function internDoctors(): HasMany
    {
        return $this->hasMany(InternDoctor::class);

    }
}
