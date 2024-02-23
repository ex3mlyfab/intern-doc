<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Doctor extends Model
{

    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'designation',
        'department_id',
        'posting_id',
        'is_active',
        'employment_type',
        'name',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function posting(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'posting_id');
    }

    public function monthlyReports(): HasMany
    {
        return $this
            ->hasMany(MonthlyReport::class)
            ->orderByDesc('created_at');
    }

    public function latestMonthlyReport(): HasOne
    {
        return $this
            ->hasOne(MonthlyReport::class)
            ->latestOfMany();
    }
    public function getlatestReportAttribute()
    {
        if($this->monthlyReports()->exists()){
            return date_format($this->monthlyReports->first()->assessment_period, 'm/y') == date('m/y');
       }
       return false;
    }


}
