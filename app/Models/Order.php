<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id','description', 'client_id','price','orderProducts',
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')
        ->withTimestamps()->withPivot('qte','price')->withTrashed();
    }


    public function client()
    {
        return $this->belongsTo(Client::class)->withTrashed();
    }
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

}
