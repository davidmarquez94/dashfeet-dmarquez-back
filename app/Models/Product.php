<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Active;
use App\Models\Shipment;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'active_id',
        'shipment_id'
    ];

    public function active(): BelongsTo {
        return $this->belongsTo(Active::class);
    }

    public function shipment(): BelongsTo {
        return $this->belongsTo(Shipment::class);
    }
}