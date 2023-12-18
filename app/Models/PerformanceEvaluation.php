<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PerformanceEvaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'posting_record_id',
        'assesed_by',
        'kabms',
        'kaacs',
        'kpbms',
        'mr_ht',
        'mr_aw',
        'mr_pn',
        'mr_cs',
        'diagnostic_acumen',
        'kaat',
        'iwomoht',
        'artc',
        'atutl',
        'atpcdr',
        'atlaacs',
        'auodf',
        'side_laboratories',
        'laboratory_request',
        'radiology_request',
        'follow_up_of_results' ,
        'puntuality',
        'availability',
        'endurance',
        'personal_comportment',
        'neatness',
        'sense_of_responsibility',
        'interpersonal',
        'rwha',
        'oerall_evaluation',
        'general_comments',
        'is_fit',
        'if_is_fit_is_no_comment',

    ];

    public function postingRecord(): BelongsTo
    {
        return $this->belongsTo(PostingRecord::class);
    }

    public function assesedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assesed_by');
    }
}
