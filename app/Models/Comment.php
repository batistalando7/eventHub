<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\News;
use App\Models\Subscription;

class Comment extends Model
{
    //
    use SoftDeletes;

    protected $table = 'comments';
    protected $guarded = ['id'];


    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class, 'subscribed_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relação com respostas
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    // Relação com o comentário pai
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function getFormattedDateAttribute()
    {
        return $this->date->format('d/m/Y');
    }

}
