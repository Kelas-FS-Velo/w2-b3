<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'catalog_id',
        'location',
        'quantity',
        'available',
        'last_audited',
    ];

    protected $hidden = [
        'catalog_id',
    ];

    public function catalog()
    {
        return $this->belongsTo(Catalog::class);
    }

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
}
