<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'twitch_id',
        'twitch_username',
        'twitch_created_at',
        'email',
        'image',
        'role',
        'terms',
        'sent_message',
        'signed_at',
        'views'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'terms' => 'boolean',
        'sent_message' => 'boolean',
        'signed_at' => 'datetime',
        'views' => 'integer'
    ];

    public function getImageAttribute()
    {
        $isPast = Carbon::now()
            ->subMonths(3)
            ->isAfter($this->attributes['twitch_created_at']);

        if ($isPast) {
            return $this->attributes['image'];
        }

        return 'https://placehold.it/300x300';
    }
}
