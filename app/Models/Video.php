<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;

    protected $table = 'videos';
    protected $guarded = ['id'];
    
    /* protected $fillable = ['title', 'detach', 'description', 'url']; */

    public function getEmbedUrlAttribute()
    {
        // Caso seja link do YouTube normal: https://www.youtube.com/watch?v=XXXX
        if (str_contains($this->url, 'youtube.com/watch?v=')) {
            return 'https://www.youtube.com/embed/' . \Illuminate\Support\Str::after($this->url, 'v=');
        }

        // Caso seja link curto: https://youtu.be/XXXX
        if (str_contains($this->url, 'youtu.be/')) {
            return 'https://www.youtube.com/embed/' . \Illuminate\Support\Str::after($this->url, 'youtu.be/');
        }

        // Por padrão retorna o link original (para outros players, ex: Vimeo)
        return $this->url;
    }

}
