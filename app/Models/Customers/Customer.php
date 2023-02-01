<?php

namespace App\Models\Customers;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasUuids;

    protected $table = 'customers';

    protected $fillable = [
        'id',
        'name',
        'document_id',
        'phone_number',
        'zip_code'
    ];

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }
}
