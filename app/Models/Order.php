<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['name','phone','email','warehouse_id','duration','description'];
    public function product()
    {
        return $this->belongsTo(Warehouse::class, 'warehouse_id', 'id');
    }
}
