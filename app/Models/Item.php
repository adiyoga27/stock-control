<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = "item";

    protected $fillable = [
        'name', 'unit', 'description', 'image', 'buffer_stock'
    ];

    public function stock()
    {
        return $this->hasMany(Stock::class, 'item_id', 'id');
    }
}
