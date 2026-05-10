<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    //
    use SoftDeletes;

    protected $table = 'authors';
    protected $guarded = ['id'];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
    
}
