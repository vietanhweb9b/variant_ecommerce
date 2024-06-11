<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catelogue extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'cover',
        'is_active'
    ];
    protected $casts=[
        'is_active'=>'boolean'
    ];
}
