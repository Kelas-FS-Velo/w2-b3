<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $fillable = [
        'user_id',
        'resource_id',
        'borrow_date',
        'due_date',
        'return_date',
        'amount',
        'borrowing_price',
        'fine_price',
        'total_borrowing_date',
        'total_fine_date',
        'status',
    ];

    protected $hidden = [
        'user_id',
        'resource_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

    public function borrow_policy()
    {
        return $this->hasOne(BorrowPolicy::class);
    }
}
