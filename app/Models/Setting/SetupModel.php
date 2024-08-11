<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetupModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'material',
        'information',
        'maintenance',
    ];
}
