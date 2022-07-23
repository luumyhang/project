<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    use HasFactory;

    protected $fillable = [
        'exporter_id',
        'receiver_id',
        'total_product',
        'total_price'
    ];

    /**
     * Get the user associated with the Export
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function exporter(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'exporter_id');
    }

    /**
     * Get the user associated with the Export
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function receiver(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'receiver_id');
    }

    /**
     * The roles that belong to the Export
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'export_products', 'product_id', 'export_id');
    }
}
