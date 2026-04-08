<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Carpost extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'seller_id',
        'title',
        'description',
        'image',
        'price',
        'brand',
        'model',
        'build_year',
        'kilometer',
        'horsepower',
        'previous_owners',
        'status',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'seller_id' => 'integer',
            'price' => 'decimal:2',
            'build_year' => 'integer',
            'kilometer' => 'integer',
            'horsepower' => 'integer',
            'previous_owners' => 'integer',
        ];
    }

    public function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }

    public function seller(): BelongsTo
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
}
