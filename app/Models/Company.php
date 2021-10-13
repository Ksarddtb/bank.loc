<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'inn',
        'rs',
        'mfo',
        'mfo_address',
        'ndc_kod',
        'nked',
        'email',
        'address',
        'phone',
        'fax',
        'exat',
        'url',
        'province_id',
        'region_id',
        'director',
    ];
}
