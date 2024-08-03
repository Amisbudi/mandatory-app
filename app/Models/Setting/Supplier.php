<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'name_of_factory',
        'type_of_goods',
        'address',
        'phone',
        'information',
        'purchase',
        'maintenance',
        'cost',
    ];
}
