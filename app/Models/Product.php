<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
       'sku','qte','price'
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product')
        ->withPivot('qte','price')->withTimestamps()->withTrashed();

    }
}
