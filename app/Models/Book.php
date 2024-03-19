<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    Protected $table = 'books';
    protected $guarded = false;
    
    public function tags()
    {
        return $this->belongsToMany(
            Tag::class, 'book_tags', 'book_id', 'tag_id');
    }

    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}