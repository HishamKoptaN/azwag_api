<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'requester_data_id',
        'requested_data_id'
    ];

    public function requesterData()
    {
        return $this->belongsTo(
            RequesterData::class,
            'requester_data_id',
        );
    }

    public function requestedData()
    {
        return $this->belongsTo(
            RequestedData::class,
            'requested_data_id',
        );
    }
}
