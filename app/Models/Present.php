<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Present extends Model
{
    use HasFactory;

    protected $table = 'present';

    protected $fillable = [
        'user_id',
        'image',
        'date',
        'status',
        'keterangan',
        'reason'
    ];

    public function users() {
        return $this->hasMany(User::class, 'user_id');
    }


}
