<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Group extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'groups';

    protected $fillable = [
        'name',
        'slug',
        'image',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public function users() {
        return $this->belongsToMany(User::class, 'pivot_group', 'group_id', 'user_id')->withPivot('obligation');
    }
}
