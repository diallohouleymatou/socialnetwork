<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Commentaire;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'email',
        'password',
        'username',
        'prenom',
        'photo',
        'bio'
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

    public function followers(){
        return $this->belongsToMany(User::class,'follows','follower_id','followed_id');
    }

    public function following(){
        return $this->belongsToMany(User::class,'follows','followed_id','follower_id');
    }

    public function publications(){
        return $this->hasMany(Publication::class);
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
}
