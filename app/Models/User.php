<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Idea;
use App\Models\Login;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function ideas(): HasMany
    {
        return $this->hasMany(Idea::class);
    }

    public function votes(): MorphToMany
    {
        return $this->MorphToMany(Idea::class, 'votable');
    }

    public function logins(): HasMany
    {
        return $this->HasMany(Login::class);
    }

    public function getAvatar(): string
    {
        return
            'https://www.gravatar.com/avatar/'
            . md5($this->email)
            . '?s200'
            . '&d=robohash';
    }

    public function lastLogin()
    {
        return $this->belongsTo(Login::class);
    }

    public function scopeWithLastLogin($query)
    {
        $query->addSelect([
            'last_login_id' => Login::select('id')
                ->whereColumn('user_id', 'users.id')
                ->latest()
                ->take(1)
        ])->with('lastLogin');
    }
}
