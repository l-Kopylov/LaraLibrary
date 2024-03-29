<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    Protected $table = 'tags';
    protected $guarded = false;

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

}
