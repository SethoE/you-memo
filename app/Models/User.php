<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'role_id',
        'last_name',
        'email',
        'email_verified_at',
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
    protected $primaryKey = 'user_id';
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function deck() {
        return $this->hasMany(Deck::class, 'user_id');
    }

    public function user_log() {
        return $this->hasMany(User_log::class, 'user_id');
    }

    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
