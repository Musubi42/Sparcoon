<?php

namespace App\Models;

use App\Models\Profile;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
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
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function examples()
    {
        return $this->hasMany(Example::class);
    }

    public function patrimoine()
    {
        return $this->hasOne(Patrimoine::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function patients()
    {
        if($this->hasRole('Soignant')){
            return $this->belongsToMany(User::class, 'soignants', 'soignant_id', 'user_id');   
        }
    }

    public function soignants()
    {
        if($this->hasRole('Patient')) {
            return $this->belongsToMany(User::class, 'soignants', 'user_id', 'soignant_id');
        }
    }
}
