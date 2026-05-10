<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use App\Models\Category;

class TypeCategory extends Model
{
    //

    protected $table = 'type_categories';
    protected $guarded = ['id'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
