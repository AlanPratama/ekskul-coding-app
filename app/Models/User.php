<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Cviebrock\EloquentSluggable\Sluggable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Sluggable;

    protected $table = 'users';

    protected $fillable = [
        'class_id',
        'role_id',

        'name',
        'nisn',

        'phone',
        'linkedin',
        'instagram',
        'email',

        'description',
        'image',

        'username',
        'slug',
        'password',

        'remember_token'
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'username'
            ]
        ];
    }

    public function role() {
        return $this->belongTo(Role::class, 'role_id');
    }

    public function class() {
        return $this->belongsTo(Classes::class, 'class_id');
    }


    public function skills() {
        return $this->belongsToMany(Skill::class, 'pivot_skill', 'user_id', 'skill_id');
    }

    public function present() {
        return $this->belongsTo(Present::class, 'user_id');
    }



    public function groups() {
        return $this->belongsToMany(Group::class, 'pivot_group', 'user_id', 'group_id')->withPivot('obligation');;
    }









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
        'password' => 'hashed',
    ];

    protected $attributes = [
        'role_id' => 3,
    ];
}
