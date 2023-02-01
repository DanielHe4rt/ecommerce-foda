<?php

namespace App\Models\Customers;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasUuids;

    protected $table = 'customer_addresses';

    protected $fillable = [
        'id',
        'customer_id',
        'alias',
        'street',
        'neighborhood',
        'number',
        'complement',
        'city',
        'state',
        'country'
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
