<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

use function PHPUnit\Framework\isNull;

class User extends Authenticatable
{
    use HasUuids;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'surname',
        'first_name',
        'middle_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function department(): HasOne
    {
        return $this->hasOne(Department::class);
    }
    public function admin(): MorphOne
    {
        return $this->morphOne(Admin::class, 'adminable');
    }

    public function getDepartmentNameAttribute(): string
    {
        if($this->admin()->exists()){
            return $this->admin->department->name;
        }else{
            return '';

        }


    }
    public function attendanceReports(): HasMany
    {
        return $this->hasMany(AttendanceReport::class, 'supervisor_id');
    }
    public function qualifications(): MorphMany
    {
        return $this->morphMany(Qualification::class, 'qualifiable');
    }

    public function getFullnameAttribute()
    {
        return ucwords($this->title.' '.$this->surname. ' '. $this->first_name. ' '. $this->middle_name);
    }


}
