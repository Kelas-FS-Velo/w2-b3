<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $fillable = [
        'resource_id',
        'date_added',
        'condition',
    ];

    protected $hidden = [
        'resource_id',
    ];

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}
