<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = true;
    protected $table = "item";

    protected $fillable = [
        'name', 'unit', 'description', 'image', 'buffer_stock'
    ];

    public function stock()
    {
        return $this->hasMany(Stock::class, 'item_id', 'id');
    }
}
