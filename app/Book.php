<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Story;
class Book extends Model
{

  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'title','body',
    ];
    public function stories()
    {
        return $this->hasMany(Story::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
