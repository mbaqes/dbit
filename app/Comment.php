<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Story;
class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'body','user_id','story_id',
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function story()
    {
        return $this->belongsTo(Story::class);
    }
}

