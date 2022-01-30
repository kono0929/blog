<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Photo;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    // protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'title',
        'body'

    ];

    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Get the post's photo.
     */
    public function photos()
    {
        return $this->morphMany(Photo::class, 'imageable');
    }

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
