<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galery extends Model
{
    use SoftDeletes;

    protected $table = 'galeries';
    protected $guarded = ['id'];

    protected $casts = [
        'images' => 'array',
    ];

}
