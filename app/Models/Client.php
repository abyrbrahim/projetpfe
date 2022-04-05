<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name','email','phone'
    ];
    public function order()
    {
        return $this->hasMany(Order::class)->withTrashed();
    }
}
