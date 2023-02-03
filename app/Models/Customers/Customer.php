<?php

namespace App\Models\Customers;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasUuids;
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'id',
        'name',
        'document_id',
        'phone_number',
    ];

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }
}
