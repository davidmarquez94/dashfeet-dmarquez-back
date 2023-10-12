<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Client;
use App\Models\Product;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'delivery_address',
        'status',
        'delivery_date',
        'client_id'
    ];

    public function client(): BelongsTo {
        return $this->belongsTo(Client::class);
    }

    public function products(): HasMany {
        return $this->hasMany(Product::class);
    }
}