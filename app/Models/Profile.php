<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'fb',
        'linkedIn',
        'github',
        'profile_pic',
        'email',
        'user_id',
        'profile_name',
        'jobTitle',
        'location',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
