<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Testing\Constraints\SoftDeletedInDatabase;
use App\Models\Comment;

class Subscription extends Model
{
    //
    use SoftDeletes;

    protected $table = 'subscriptions';
    protected $guarded = ['id'];

    /* função para criar o relacionamento 1:N entre notícias e comentários */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'subscribed_id');
    }
}
