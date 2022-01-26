<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Models\Post;
use App\Models\User;

class Country extends Model
{
    use HasFactory;

    // public function posts(){
    //     $this->hasManyThrough(Post::class, User::class);
    // }

    /**
     * Get all of the posts for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
        public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }
}
