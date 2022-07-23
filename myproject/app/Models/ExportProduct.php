<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExportProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'exporter_id',
        'receiver_id',
        'quantity',
        'price',
        'total_price'
    ];
}
