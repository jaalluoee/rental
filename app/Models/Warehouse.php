<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $guarded = [
        'created_at',
        'updated_at',
        'id'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
