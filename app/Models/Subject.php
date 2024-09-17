<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = ['id', ];

    public function lecturer()
    {
        return $this->belongsTo(User::class);
    }
    
    public function students()
    {
        return $this->belongsToMany(User::class, 'subject_user');
    }
}
