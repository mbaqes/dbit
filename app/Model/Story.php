<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Book;
class Story extends Model
{
    protected $fillable = [
        'id', 'book_id', 'title','body',
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function books()
    {
        return $this->belongsTo(Book::class);
    }
}