<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $table = 'tweets';

    protected $fillable = [
        'link', 'content' , 'datetweet',
    ];
    public static function countTweets()
    {
        return self::count();
    }
}
