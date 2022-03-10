<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "stock";


    protected $fillable = [
        'item_id', 'user_id', 'in', 'out', 'amount', 'description'
    ];

    
}
