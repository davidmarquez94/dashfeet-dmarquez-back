<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Shipment;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'document_type',
        'document',
        'email',
        'phone'
    ];

    public function shipments(): HasMany {
        return $this->hasMany(Shipment::class);
    }
}