<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'title',
        'author',
        'publication_date',
        'genre',
        'summary',
        'cover_image_url',
        'metadata',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'metadata' => 'json',
    ];

    public function catalog()
    {
        return $this->hasOne(Catalog::class);
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }

    public function borrow_policy()
    {
        return $this->hasOne(BorrowPolicy::class);
    }
}
