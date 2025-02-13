<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_name',
        'type',
        'batch_no',
        'location',
        'branch',
        'price',
        'quantity',
        'expiry',
        'item_code'
        // '_token', // Add '_token' to the fillable attributes
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
