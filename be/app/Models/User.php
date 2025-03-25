<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'remember_token' => 'string',
    ];

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }

    public function recommendations()
    {
        return $this->hasMany(Recommendation::class);
    }

}
