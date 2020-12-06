<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    public function products()
    {
        return $this->hasMany(Products::class);
    }

    protected $table = "orders";

    protected $fillable = [
        'amount', 'buyer_name', 'buyer_contact','product_id'
    ];
}
