<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skills';

    protected $fillable = [
        'name',
        'image'
    ];


    public function users() {
        return $this->belongsToMany(User::class, 'pivot_skill', 'skill_id', 'user_id');
    }
}
