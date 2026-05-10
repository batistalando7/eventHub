<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\News;
use App\Models\Comment;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use softDeletes;

    protected $table = 'users';
    protected $guarded = ['id'];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /* funções dos gates */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isEditor()
    {
        return in_array($this->role, ['admin', 'editor']);
    }

    public function isJornalista()
    {
        return in_array($this->role, ['admin', 'editor', 'jornalista']);
    }

     public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    /* Função de Slug */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->slug = Str::slug($user->name);
        });

        static::updating(function ($user) {
            $user->slug = Str::slug($user->name);
        });
    }
}
