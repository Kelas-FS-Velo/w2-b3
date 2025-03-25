<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowingPolicy extends Model
{
    protected $fillable = [
        'resource_id',
        'borrowing_price',
        'fine_price',
        'total_borrowing_date',
        'total_fine_date',
    ];

    protected $hidden = [
        'resource_id',
    ];

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }
    
}
